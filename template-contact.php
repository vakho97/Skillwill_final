
<!-- Template Name: Contact -->

<?php

get_header();
?>

<section class="contact-section">
        <h2 class="section-title">Contact</h2>
        <div class="underline"></div>
        <form class="contact-form">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" class="btn">Send</button>
        </form>
    </section>
