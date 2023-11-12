<?php

function setInputClass($key)
{
    global $formErrors, $formInputs, $formInputInvalid, $formInputValid;
    if (array_key_exists($key, $formErrors)) {
        return $formInputInvalid;
    } elseif (array_key_exists($key, $formInputs)) {
        return $formInputValid;
    } else {
        return '';
    }
}

function setInputValue($key)
{
    global $formErrors, $formInputs;
    if (array_key_exists($key, $formInputs)) {
        return $formInputs[$key];
    } else {
        return '';
    }
}

function setErrorClass($key)
{
    global $formErrors, $showError;
    if (array_key_exists($key, $formErrors)) {
        return $showError;
    } else {
        return '';
    }
}

function setErrorMessage($key)
{
    global $formErrors;
    if (array_key_exists($key, $formErrors)) {
        return $formErrors[$key];
    } else {
        return 'No error message';
    }
}

?>

<div class="form-wrapper" id="contact-form">
    <form action="index.php#contact-form" class="form" method="post" novalidate>
        <?php if ($formSubmitSuccess) : ?>
            <div>Your message has been sent!</div>
        <?php elseif ($formSubmitError) : ?>
            <div>There was a problem sending your message - please try again.</div>
        <?php endif; ?>
        <label for="name" class="form__label">Name</label>
        <input type="text" name="name" id="name" class="form__input <?= setInputClass('name') ?>" value="<?= setInputValue('name') ?>" minlength="1" required />
        <div class="form__err-message <?= setErrorClass('name') ?>">
            <?= setErrorMessage('name') ?></div>
        <label for="email" class="form__label">Email</label>
        <input type="email" name="email" id="email" class="form__input  <?= setInputClass('email') ?>" value="<?= setInputValue('email') ?> " required />
        <div class=" form__err-message <?= setErrorClass('email') ?>"><?= setErrorMessage('email') ?>
        </div>
        <label for="message" class="form__label">Message (min 25 characters)</label>
        <textarea name="message" id="message" minlength="25" required cols="30" rows="10" class="form__input form__input--message <?= setInputClass('message') ?>"><?= setInputValue('message') ?></textarea>
        <div class="form__err-message <?= setErrorClass('message') ?>"><?= setErrorMessage('message') ?></div>
        <input type="submit" name="submit" value="Message Me" class="form__button" />

    </form>




</div>