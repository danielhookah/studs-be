<?php

declare(strict_types=1);

namespace App\Domain\User\Service;

use App\Domain\Services\MailService;
use App\Domain\Services\Service;
use App\Domain\User\Persistence\UserRepository;
use App\Domain\User\UserEntity;
use App\Infrastructure\Shared\Exception\CreateEntityException;
use App\Infrastructure\Shared\Exception\ResourceNotFoundException;
use App\Infrastructure\Shared\Exception\SendEmailException;
use App\Infrastructure\User\Model\Request\AddProjectDTO;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Psr\Log\LoggerInterface;

/**
 * Class UserService
 * @package App\Domain\User\Service
 */
class UserService extends Service
{
    private UserRepository $userRepository;
    private MailService $mailService;

    /**
     * UserService constructor.
     * @param LoggerInterface $logger
     * @param UserRepository $userRepository
     * @param MailService $mailService
     * @param EntityManagerInterface $em
     */
    public function __construct(
        LoggerInterface $logger,
        UserRepository $userRepository,
        MailService $mailService,
        EntityManagerInterface $em
    )
    {
        parent::__construct($logger, $em);
        $this->userRepository = $userRepository;
        $this->mailService = $mailService;
    }

    /**
     * @param null $email
     * @param null $phone
     * @throws Exception
     */
    public function checkUserUniq($email = null, $phone = null)
    {
        if ($email) {
            $emailResult = $this->userRepository->findOneByOrNull(['email' => $email]);
            if ($emailResult !== null) throw new Exception('User with this email already exists', 400);
        }
        if ($phone) {
            $phoneResult = $this->userRepository->findOneByOrNull(['phone' => $phone]);
            if ($phoneResult !== null) throw new Exception('User with this phone already exists', 400);
        }
    }

    /**
     * @param UserEntity $userEntity
     * @throws SendEmailException
     */
    public function sendConfirmEmail(UserEntity $userEntity)
    {
        $params = [
            'email' => $userEntity->getEmail(),
            'firstName' => $userEntity->getFirstName(),
            'lastName' => $userEntity->getLastName(),
            'dataToReplace' => [
                'hash' => $userEntity->getConfirmEmailHash()
            ]
        ];

        $this->mailService->send($params, 'invite');
    }

    /**
     * @param string $hash
     * @return bool
     * @throws Exception
     */
    public function checkHashActual(string $hash)
    {
        $hashTimestamp = (int)explode('-t-', $hash)[1];
        $currentTimestamp = time();

        // 1 week - 604800
        if ($currentTimestamp - $hashTimestamp > 604800) {
            return false;
        }

        return true;
    }
}
