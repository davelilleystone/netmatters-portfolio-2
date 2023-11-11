<?php if (!$formValid) : ?>
    <div class="contact-form-errors">
        <p>Please correct the following errors:</p>
        <ul>
            <?php foreach ($formErrors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>