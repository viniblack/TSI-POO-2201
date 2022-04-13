<?php

interface Crud
{
   function criar(array $dados): bool;
   function listar(int $id = null): array;
   function editar(int $id, array $dados): bool;
   function deletar(int $id): bool;
}
