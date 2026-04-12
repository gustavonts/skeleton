<?php

namespace App\Controller;

use App\Entity\Pessoa;
use App\Repository\PessoaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/pessoas')]
class PessoaController
{
    #[Route('', methods: ['GET'])]
    public function index(PessoaRepository $repo, SerializerInterface $serializer): JsonResponse
    {
        $pessoas = $repo->findAll();
        $json = $serializer->serialize($pessoas, 'json');

        return new JsonResponse($json, 200, [], true);
    }

    #[Route('/{id}', methods: ['GET'])]
    public function show(Pessoa $pessoa, SerializerInterface $serializer): JsonResponse
    {
        $json = $serializer->serialize($pessoa, 'json');

        return new JsonResponse($json, 200, [], true);
    }

    #[Route('', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $pessoa = new Pessoa();
        $pessoa->setNome($data['nome'] ?? null);
        $pessoa->setCpf($data['cpf'] ?? null);
        $pessoa->setTelefone($data['telefone'] ?? null);
        $pessoa->setRua($data['rua'] ?? null);
        $pessoa->setNumero($data['numero'] ?? null);
        $pessoa->setComplemento($data['complemento'] ?? null);
        $pessoa->setBairro($data['bairro'] ?? null);
        $pessoa->setCep($data['cep'] ?? null);
        $pessoa->setCidade($data['cidade'] ?? null);
        $pessoa->setEstado($data['estado'] ?? null);

        $em->persist($pessoa);
        $em->flush();

        return new JsonResponse(['message' => 'Pessoa criada'], 201);
    }

    #[Route('/{id}', methods: ['PUT'])]
    public function update(Request $request, Pessoa $pessoa, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $pessoa->setNome($data['nome'] ?? $pessoa->getNome());
        $pessoa->setCpf($data['cpf'] ?? $pessoa->getCpf());
        $pessoa->setTelefone($data['telefone'] ?? $pessoa->getTelefone());
        $pessoa->setRua($data['rua'] ?? $pessoa->getRua());
        $pessoa->setNumero($data['numero'] ?? $pessoa->getNumero());
        $pessoa->setComplemento($data['complemento'] ?? $pessoa->getComplemento());
        $pessoa->setBairro($data['bairro'] ?? $pessoa->getBairro());
        $pessoa->setCep($data['cep'] ?? $pessoa->getCep());
        $pessoa->setCidade($data['cidade'] ?? $pessoa->getCidade());
        $pessoa->setEstado($data['estado'] ?? $pessoa->getEstado());

        $em->flush();

        return new JsonResponse(['message' => 'Pessoa atualizada']);
    }

    #[Route('/{id}', methods: ['DELETE'])]
    public function delete(Pessoa $pessoa, EntityManagerInterface $em): JsonResponse
    {
        $em->remove($pessoa);
        $em->flush();

        return new JsonResponse(['message' => 'Pessoa removida']);
    }
}