<?php include('background.php') ?>
                    <div class="background">
                        <?php
                            session_start();
                            echo $_SESSION['confirm'];
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php unset($_SESSION['confirm']); ?>