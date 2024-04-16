<?php
    $title = "Shopy";
    include("def_header.php");
?>

    <section class="hero">
        <div class="hero-overlay"></div>
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwallpapercave.com%2Fwp%2Fwp3631309.jpg&f=1&nofb=1&ipt=6bc088b1017402fcab7d6d2782f0ac95e7ac20f8f0e508968d5733a601cea63f&ipo=images" />
        <div class="hero-content h-100 container-xxl position-relative">
            <div class="d-flex h-100 align-items-center m-1">
                <div class="text-white">
                    <h1 class="fw-bold mb-4">Welcome to Shopy</h1>
                    <p class="lead mb-4">What would you like to buy today?</p>
                    <p class="lead mb-4">Explore what's new on Shopy!</p>
                    <div class="hero-buttons-container mt-2 d-flex flex-column">
                        <a href="./trending.php" class="btn btn-primary mb-2" role="button">Trending Products</a>
                        <a href="./technology.php" class="btn btn-primary mb-2" role="button">Technology</a>
                        <a href="./groceries.php" class="btn btn-primary mb-2" role="button">Groceries</a>
                        <a href="./fashion.php" class="btn btn-primary mb-2" role="button">Fashion</a>
                        <a href="./books.php" class="btn btn-primary mb-2" role="button">Books</a>
                        <a href="./games.php" class="btn btn-primary mb-2" role="button">Games</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include("def_footer.php") ?>