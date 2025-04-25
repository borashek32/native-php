<div class="profile-section">
    <h2><?= $title ?> Profile</h2>

    <div class="info">
        <strong>Name:</strong> <?= htmlspecialchars($employee['name']) ?>
    </div>

    <div class="info">
        <strong>Position:</strong> <?= htmlspecialchars($employee['position']) ?>
    </div>

    <div class="info">
        <strong>Email:</strong> <?= htmlspecialchars($employee['email']) ?>
    </div>

    <div class="info">
        <strong>Status:</strong> <?= htmlspecialchars($employee['work_output']) ?>
    </div>

    <div class="info">
        <strong>Break time:</strong> <?= htmlspecialchars($employee['rest_output']) ?>
    </div>
</div>