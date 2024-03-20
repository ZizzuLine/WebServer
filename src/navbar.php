<div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="../index.php" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">Zizzu<span class="text-secondary">Line</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">

                            <a href="../index.php" class="nav-item nav-link">Home</a>
                            <?php
                                $current_page = $_SERVER['REQUEST_URI'];
                                // About
                                if ($current_page == "/zizzuline/Webserver/src/about.php") {
                                    echo '<a href="about.php" class="nav-item nav-link active text-secondary">About</a>';
                                } else {
                                    echo '<a href="about.php" class="nav-item nav-link">About</a>';
                                }
                                // Services
                                if ($current_page == "/zizzuline/Webserver/src/service.php") {
                                    echo '<a href="service.php" class="nav-item nav-link active text-secondary">Services</a>';
                                } else {
                                    echo '<a href="service.php" class="nav-item nav-link">Services</a>';
                                }
                                // Table
                                if ($current_page == "/zizzuline/Webserver/src/table.php") {
                                    echo '<a href="table.php" class="nav-item nav-link active text-secondary">Table</a>';
                                } else {
                                    echo '<a href="table.php" class="nav-item nav-link">Table</a>';
                                }
                                // Projects
                                if ($current_page == "/zizzuline/Webserver/src/project.php") {
                                    echo '<a href="project.php" class="nav-item nav-link active text-secondary">Projects</a>';
                                } else {
                                    echo '<a href="project.php" class="nav-item nav-link">Projects</a>';
                                }
                            ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded">
                                    <a href="blog.php" class="dropdown-item">Our Blog</a>
                                    <a href="team.php" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                    <a href="404.php" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            <?php
                                if ($current_page == "/zizzuline/Webserver/src/contact.php") {
                                    echo '<a href="contact.php" class="nav-item nav-link active text-secondary">Contact</a>';
                                } else {
                                    echo '<a href="contact.php" class="nav-item nav-link">Contact</a>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                        </div>
                    </div>
                </nav>
            </div>
</div>