 <div class="clients">
     <?php if ($clients_title = get_field('tree_content_title')): ?>
                <h2><?php echo $clients_title; ?></h2>
     <?php endif; ?>
     <?php if ($clients_subtitle = get_field('tree_content_subtitle')): ?>
                <h3><?php echo $clients_subtitle ?></h3>
     <?php endif; ?>
                <div class="client-1">
                    <?php if ($client_1 = get_field('tree_client_1')): ?>
                        <?php echo $client_1 ?>
                    <?php endif; ?>
                </div>
                <div class="client-2">
                    <?php if ($client_2 = get_field('tree_client_2')): ?>
                        <?php echo $client_2 ?>
                    <?php endif; ?>
                </div>
</div>