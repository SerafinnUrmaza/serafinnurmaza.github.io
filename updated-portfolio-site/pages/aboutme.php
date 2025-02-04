<!DOCTYPE html>
<html lang="en">
<?php
$pagetitle = "About Me";
$portfolio = "";
$about = "active-page";
$faq = "";
$support = "";
?>
<?php include('glu3-project1/includes/meta.php'); ?>

<body>
    <?php include('glu3-project1/includes/header.php'); ?>
    <main>
        <div class="bodytitle">
            <!--Source: (About Me) Grace Urmaza--><img src="public/website-content/aboutmepagecontent/aboutme.png" alt="About Me">
        </div>
        <div class="horizontal">
            <div class="aboutmepic">
                <figure>
                    <!--Source: (Profile Image) Grace Urmaza-->
                    <img src="public/website-content/aboutmepagecontent/profileimage.jpg" alt="A picture of a girl holding a pug and smiling" class="frame">
                </figure>
            </div>
            <div class="text">
                <h3>This is me!</h3>
                <p>Hiya! My name is Grace! I am an aspiring artist who specializes in digital painting, charcoal drawing, and acrylic painting. I grew up on the south coast of Long Island, NY. The water is where I feel most at home, especially when crabbing or body surfing at the beach. I attended Smith College and am now a student at the College of Agriculture and Life Sciences at Cornell University. </p>
            </div>
        </div>
        <h3> My Art Journey</h3>
        <p>I have always loved working with my hands. I would sit and sew with my aunt when my cousins were playing soccer outside. I crocheted at recess and swapped my lunch period for a ceramics class in high school. I have always loved art. I only really started following that love in my junior year of high school when I began experimenting with mediums. First watercolor, then charcoal, acrylics, color pencils, digital art, and so on and so forth. In a perfect world I would master every art and every craft.</p>
        <h3>My Lovely Assistants</h3>
        <div class="dog">
            <figure class="aboutmepic">
                <!--Source: (Peanut Photo) Grace Urmaza-->
                <img src="public/website-content/aboutmepagecontent/peanutphoto.jpg" alt="A picture of a small weiner dog type dog the color honey" class="frame">
            </figure>
            <div class="text">
                <h4>Peanut</h4>
                <p>The golden boy of my puppies. A little corgi-weiner dog mix who loves zooming around open fields and giving you a sassy side eye.</p>
            </div>
        </div>
        <div class="dog">
            <figure class="aboutmepic">
                <!--Source: (Hamilton Photo) Grace Urmaza-->
                <img src="public/website-content/aboutmepagecontent/hamiltonphoto.jpg" alt="A picture of a sleepy off white chihuahua on the brink of sleep with his tongue sticking out" class="frame">
            </figure>
            <div class="id">
                <h4>Hamilton</h4>
                <p>The fiesty spitfire of my helpers. He's small but nasty. Classic Chihuahua energy if you catch my drift.</p>
            </div>
        </div>
        <div class="dog">
            <figure class="aboutmepic">
                <!--Source: (Goose Photo) Grace Urmaza-->
                <img src="public/website-content/aboutmepagecontent/goosephoto.jpg" alt="A black one eyed pug looking dog with a white belly and pink color stares shyly at the camera" class="frame">
            </figure>
            <div class="text">
                <h4>Goose</h4>
                <p>My darling girl who is so sweet and spunky. She's a cute and old chihuahua-pug mix who loves to snort and roll around like a pig.</p>
            </div>
        </div>
        <div class="dog">
            <figure class="aboutmepic">
                <!--Source: (Felix Photo) Finn Urmaza -->
                <img src="public/website-content/aboutmepagecontent/felix.jpeg" alt="A pug sleeping with his tongue out." class="frame">
            </figure>
            <div class="text">
                <h4>Felix</h4>
                <p>The newest addition to my dog family: Felix! He's sleepy and shows love by nibbling your fingers. He has never known hardship...</p>
            </div>
        </div>
        <h2>Sign up for my newsletter!</h2>
        <form method="post" action="/about-me/newsletter-confirmation" novalidate>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" />
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" />
            <input type="submit" value="Sign Up" />
        </form>
    </main>
    <?php include('glu3-project1/includes/footer.php'); ?>
</body>

</html>
<!---All of the image elements on this website are created by the creator of the website, Grace Urmaza. I want to replace the links in the navigation bar and the footer with images that link to the respective links, but I'm not sure how to do that yet-->
