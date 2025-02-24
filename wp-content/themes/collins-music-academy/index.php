<?php get_header(); ?>

<main class="home-page">

    <section class="hero">
        <h1>Welcome to Collins Music Academy</h1>
        <p>Learn to embrace and learn the music you love!</p>
        <a href="/lessons" class="cta-button">Explore Lessons</a>
    </section>

    <section class="featured-instructors">
        <h2>Meet Our Instructors</h2>
        <div class="instructor-grid">
            <div class="instructor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instructor1.jpeg" alt="Sarah Collins">
                <h3>Sarah Collins</h3>
                <p>Piano & Guitar</p>
            </div>
            <div class="instructor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instructor2.jpeg" alt="John Doe">
                <h3>John Doe</h3>
                <p>Violin & Drums</p>
            </div>
        </div>
    </section>

    <section class="cta">
        <h2>Ready to start your musical journey?</h2>
        <a href="/contact" class="cta-button">Book a Lesson</a>
    </section>

</main>

<?php get_footer(); ?>