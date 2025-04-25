<div class="profile-section">
    <h2><?= $title ?> Profile</h2>

    <div class="info">
        <strong>Name:</strong> <?= htmlspecialchars($name) ?>
    </div>

    <div class="info">
        <strong>Position:</strong> <?= htmlspecialchars($position) ?>
    </div>

    <div class="info">
        <strong>Email:</strong> <?= htmlspecialchars($email) ?>
    </div>

    <div class="info">
        <strong>Status:</strong> <?= htmlspecialchars($work_output) ?>
    </div>

    <div class="info">
        <strong>Break time:</strong> <?= htmlspecialchars($rest_output) ?>
    </div>
</div>