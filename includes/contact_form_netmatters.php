<div class="contact-form-wrapper" id="contact-form">
    <form class="contact-form" action="contact.php#contact-form" method="post">
        <div class="contact-inputs">
            <div class="contact-form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" value="<?= $formInputs['name'] ?? '' ?>" class="<?= array_key_exists('name', $formErrors) ? $errorClassName : '' ?>" required>
            </div>
            <div class="contact-form-group">
                <label for="company">Your Company</label>
                <input type="text" id="company" name="company" value="<?= $formInputs['company'] ?? '' ?>">
            </div>
            <div class="contact-form-group">
                <label for="name">Your Email</label>
                <input type="email" id="email" name="email" value="<?= $formInputs['email'] ?? '' ?>" class="<?= array_key_exists('email', $formErrors) ? $errorClassName : '' ?>" required>
            </div>
            <div class="contact-form-group">
                <label for="name">Your Telephone Number</label>
                <input type="tel" id="telephone" name="telephone" value="<?= $formInputs['telephone'] ?? '' ?>" class="<?= array_key_exists('telephone', $formErrors) ? $errorClassName : '' ?>" required>
            </div>
            <div class="contact-form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="5" cols="30" class="<?= array_key_exists('message', $formErrors) ? $errorClassName : '' ?>" required><?= $formInputs['message'] ?></textarea>
            </div>
        </div>
        <div class="contact-form__marketing-container">
            <div class="contact-form__checkbox-container">
                <input class="contact-form__checkbox--hidden" type="checkbox" name="marketing" id="contact-marketing-checkbox-hidden" />
                <label class="contact-form__checkbox" id="checkbox-label" for="contact-marketing-checkbox-hidden"></label>
            </div>

            <label class="contact-form__marketing-text" for="contact-marketing-checkbox-hidden">
                Please tick this box if you wish to receive marketing information from us. Please
                see
                our
                <a href="#" class="contact-form__privacy-link">Privacy Policy</a> for more
                information on how we
                keep your data safe.</label>
        </div>
        <div class="button-container"><button type="submit" name="submit" class="contact-form__btn">Send
                Enquiry</button><span>* Fields Required </span></div>


        <?php include './includes/contact_form_errors.php'; ?>
    </form>
</div>