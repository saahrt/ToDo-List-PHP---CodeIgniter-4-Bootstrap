<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .completed {
            text-decoration: line-through;
            color: #6c757d;
        }
    </style>
</head>
<body>
<div class="container py-4">
    <h1 class="mb-4 text-center">Lista de Tarefas</h1>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <a href="<?= site_url('tasks/create') ?>" class="btn btn-success">Adicionar Tarefa</a>

        <form method="get" class="d-flex align-items-center" style="width: 200px;">
            <label for="filter" class="me-2">Exibir:</label>
            <select id="filter" name="filter" class="form-select" onchange="this.form.submit()">
                <option value="todas" <?= $filter === 'todas' ? 'selected' : '' ?>>Todas</option>
                <option value="pendentes" <?= $filter === 'pendentes' ? 'selected' : '' ?>>Pendentes</option>
                <option value="concluidas" <?= $filter === 'concluidas' ? 'selected' : '' ?>>Concluídas</option>
            </select>
        </form>
    </div>

    <?php if (empty($tasks)): ?>
        <p class="text-center">Nenhuma tarefa encontrada.</p>
    <?php else: ?>
        <div class="list-group">
            <?php foreach ($tasks as $task): ?>
                <div class="list-group-item d-flex justify-content-between align-items-center <?= $task['is_completed'] ? 'completed' : '' ?>">
                    <div>
                        <h5><?= esc($task['title']) ?></h5>
                        <p class="mb-1"><?= esc($task['description']) ?></p>
                    </div>
                    <div>
                        <?php if (!$task['is_completed']): ?>
                            <a href="<?= site_url('tasks/complete/' . $task['id']) ?>" class="btn btn-sm btn-primary me-2">Completar</a>
                        <?php endif; ?>
                        <a href="<?= site_url('tasks/edit/' . $task['id']) ?>" class="btn btn-sm btn-warning me-2">Editar</a>
                        <a href="<?= site_url('tasks/delete/' . $task['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
