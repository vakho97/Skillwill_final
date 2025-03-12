
<?php
$first_section = get_field('first_section');
$hero_picture = $first_section['hero_picture'];
$hero_title = $first_section['hero_title'];
$hero_text = $first_section['hero_text'];
$hero_resume = $first_section['hero_resume'];

$second_section = get_field('second_section');
$second_section_title = $second_section['title'];
$second_section_card = $second_section['project_card'];
$second_section_card_2 = $second_section['project_card_2'];
$second_section_card_3 = $second_section['project_card_3'];
$second_section_card_4 = $second_section['project_card_4'];


// echo '<pre>';
// print_r($second_section);
// echo '</pre>'
?>


<?php

get_header();
?>

<main class="home-page">
    <!-- FIRST SECTION -->
    <section id='about' class="home-section-1">
        <?php if($hero_picture): ?>
            <img src="<?php echo $hero_picture['url'] ?>" alt="<?php $hero_picture['alt'] ?>" >
        <?php endif; ?>
        <div class="hero-content">
            <h1 class="hero-title"><?php echo $hero_title ?></h1>
            <p class="hero-text"><?php echo $hero_text ?></p>
            <div class="hero-resume">
                <a href="<?php echo $hero_resume ?>">Download Resume</a>
            </div>

    </section>
    <!-- SECOND SECTION -->
    <section id='project' class="home-section-2">
        <div class="container">
            <h2 class="secondary-title portfolio-text-center">Projects</h2>
            <div class="project">
                <div class="project-card">
                    <div class="project-card-header">
                        <div class="project-card-img">
                            <?php if (!empty($second_section_card['image']['url'])): ?>
                                <img src="<?php echo htmlspecialchars($second_section_card['image']['url']); ?>" 
                                    alt="<?php echo htmlspecialchars($second_section_card['image']['alt'] ?? ''); ?>">
                            <?php endif; ?>
                        </div>
                        <h3 class="project-card-title"><?php echo htmlspecialchars($second_section_card['card_title'] ?? ''); ?></h3>
                        <h4 class="project-card-year"><?php echo htmlspecialchars($second_section_card['card_year'] ?? ''); ?></h4>
                        <h5 class="project-card-type"><?php echo htmlspecialchars($second_section_card['card_type'] ?? ''); ?></h5>
                        <p class="project-card-text"><?php echo htmlspecialchars($second_section_card['card_text'] ?? ''); ?></p>
                        <div class="project-link">
                            <?php if (!empty($second_section_card['project_link'])): ?>
                                <a href="<?php echo htmlspecialchars($second_section_card['project_link']); ?>" target="_blank" rel="noopener noreferrer">View on Github</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-header">
                        <div class="project-card-img">
                            <?php if (!empty($second_section_card_2['image']['url'])): ?>
                                <img src="<?php echo htmlspecialchars($second_section_card_2['image']['url']); ?>" 
                                    alt="<?php echo htmlspecialchars($second_section_card_2['image']['alt'] ?? ''); ?>">
                            <?php endif; ?>
                        </div>
                        <h3 class="project-card-title"><?php echo htmlspecialchars($second_section_card_2['card_title'] ?? ''); ?></h3>
                        <h4 class="project-card-year"><?php echo htmlspecialchars($second_section_card_2['card_year'] ?? ''); ?></h4>
                        <h5 class="project-card-type"><?php echo htmlspecialchars($second_section_card_2['card_type'] ?? ''); ?></h5>
                        <p class="project-card-text"><?php echo htmlspecialchars($second_section_card_2['card_text'] ?? ''); ?></p>
                        <div class="project-link">
                            <?php if (!empty($second_section_card['project_link'])): ?>
                                <a href="<?php echo htmlspecialchars($second_section_card_2['project_link']); ?>" target="_blank" rel="noopener noreferrer">View on Github</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-header">
                        <div class="project-card-img">
                            <?php if (!empty($second_section_card_3['image']['url'])): ?>
                                <img src="<?php echo htmlspecialchars($second_section_card_3['image']['url']); ?>" 
                                    alt="<?php echo htmlspecialchars($second_section_card_3['image']['alt'] ?? ''); ?>">
                            <?php endif; ?>
                        </div>
                        <h3 class="project-card-title"><?php echo htmlspecialchars($second_section_card_3['card_title'] ?? ''); ?></h3>
                        <h4 class="project-card-year"><?php echo htmlspecialchars($second_section_card_3['card_year'] ?? ''); ?></h4>
                        <h5 class="project-card-type"><?php echo htmlspecialchars($second_section_card_3['card_type'] ?? ''); ?></h5>
                        <p class="project-card-text"><?php echo htmlspecialchars($second_section_card_3['card_text'] ?? ''); ?></p>
                        <div class="project-link">
                            <?php if (!empty($second_section_card['project_link'])): ?>
                                <a href="<?php echo htmlspecialchars($second_section_card_3['project_link']); ?>" target="_blank" rel="noopener noreferrer">View on Github</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-header">
                        <div class="project-card-img">
                            <?php if (!empty($second_section_card_4['image']['url'])): ?>
                                <img src="<?php echo htmlspecialchars($second_section_card_4['image']['url']); ?>" 
                                    alt="<?php echo htmlspecialchars($second_section_card['image']['alt'] ?? ''); ?>">
                            <?php endif; ?>
                        </div>
                        <h3 class="project-card-title"><?php echo htmlspecialchars($second_section_card_4['card_title'] ?? ''); ?></h3>
                        <h4 class="project-card-year"><?php echo htmlspecialchars($second_section_card_4['card_year'] ?? ''); ?></h4>
                        <h5 class="project-card-type"><?php echo htmlspecialchars($second_section_card_4['card_type'] ?? ''); ?></h5>
                        <p class="project-card-text"><?php echo htmlspecialchars($second_section_card_4['card_text'] ?? ''); ?></p>
                        <div class="project-link">
                            <?php if (!empty($second_section_card['project_link'])): ?>
                                <a href="<?php echo htmlspecialchars($second_section_card_4['project_link']); ?>" target="_blank" rel="noopener noreferrer">View on Github</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT -->
    <section id='contact' class="contact-section">
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

<?php

get_footer();
?>