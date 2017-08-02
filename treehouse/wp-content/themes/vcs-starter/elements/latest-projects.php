            <div class="latest-projects">
                <div class="header-project">
                    <?php if ($latest_projects_title = get_field('tree_latest_projects_title')): ?>
                        <h2><?php echo $latest_projects_title; ?></h2>
                    <?php endif; ?>
                    <?php if ($latest_projects_subtitle = get_field('tree_latest_projects_subtitle')): ?>
                        <h3><?php echo $latest_projects_subtitle; ?></h3>
                    <?php endif; ?>
                </div>  
                <div class="latest-projects-desc">
                    <div class="projects-desc-box">
                        <div class="projects-desc-box-content">
                            <?php if ($latest_content = get_field('tree_latest_projects_content')): ?>
                                <?php echo $latest_content; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="projects-img-box">
                        <?php if ($right_image = get_field('tree_latest_projects_right_image')): ?>
                            <img src="<?php echo $right_image; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>