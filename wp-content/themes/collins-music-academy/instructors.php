<?php
/* Template Name: Instructor Profiles */
get_header(); ?>

<main class="instructors-page">
    <section class="instructors-header">
        <h1>Meet Our Instructors</h1>
        <p>Learn more about our talented music instructors.</p>
    </section>

    <section class="instructor-list">
        <div class="instructor-card">
            <a href="/instructors/sarah-collins">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instructor1.jpeg" alt="Sarah Collins">
                <h2>Sarah Collins</h2>
                <p>Piano & Guitar</p>
            </a>
        </div>
        <div class="instructor-card">
            <a href="/instructors/john-doe">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instructor2.jpeg" alt="John Doe">
                <h2>John Doe</h2>
                <p>Violin & Drums</p>
            </a>
        </div>
    </section>
</main>