<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= isset($task) ? 'Editar Tarefa' : 'Adicionar Tarefa' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container py-4">
    <h1 class="mb-4 text-center"><?= isset($task) ? 'Editar Tarefa' : 'Adicionar Tarefa' ?></h1>

    <form action="<?= isset($task) ? site_url('tasks/update/' . $task['id']) : site_url('tasks/store') ?>" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Título *</label>
            <input type="text" class="form-control" id="title" name="title" required
                   value="<?= isset($task) ? esc($task['title']) : '' ?>" />
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?= isset($task) ? esc($task['description']) : '' ?></textarea>
        </div>

        <button type="submit" class="btn btn-success"><?= isset($task) ? 'Atualizar' : 'Adicionar' ?></button>
        <a href="<?= site_url('tasks') ?>" class="btn btn-secondary ms-2">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
