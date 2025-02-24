<?php
/* Template Name: John Doe */
get_header(); ?>

<main class="instructor-profile">
    <section class="instructor-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instructor2.jpeg" alt="John Doe">
        <h1>John Doe</h1>
        <h2>Violin & Drums Instructor</h2>
    </section>

    <section class="instructor-details">
        <h3>Biography</h3>
        <p>John Doe is a versatile musician with over 20 years of experience in teaching and performing various musical styles.</p>

        <h3>Musical Background</h3>
        <p>John has toured internationally with orchestras and rock bands, bringing a unique perspective to his students.</p>

        <h3>Instruments Taught</h3>
        <ul>
            <li>Violin</li>
            <li>Drums</li>
        </ul>

        <h3>Teaching Philosophy</h3>
        <p>John focuses on technique and creativity, helping students build strong fundamentals while exploring their musical identity.</p>

        <h3>Contact</h3>
        <a href="/contact" class="cta-button">Inquire About Lessons</a>
    </section>
</main>