<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky navbar</title>
    <link rel="shortcut icon" href="<?= base_url('assets/logo/logo.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <div class="wrapper">
        <header>
            <nav>
                <div class="logo">LOGO</div>
                <div class="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sit nostrum veritatis architecto beatae, consectetur amet quasi enim ullam dolorem suscipit inventore nesciunt, quisquam asperiores. Sed illo mollitia laboriosam praesentium neque nulla, unde qui cumque cum. Facilis, commodi modi iusto molestias sapiente nihil distinctio exercitationem corrupti ullam earum beatae ducimus? Libero provident, tempora exercitationem quam quisquam ea tempore vitae deserunt in doloribus obcaecati cum, laudantium molestiae itaque pariatur odit nostrum amet sunt quos quibusdam? Maxime, quae laudantium mollitia culpa commodi assumenda est quam aliquid repudiandae velit iusto, dolorem vel ipsam sunt. Quo, fugiat placeat. Harum unde excepturi doloribus placeat dignissimos.</p>
            <p>Voluptatem animi est magni exercitationem voluptate consequatur adipisci neque officia. Repellat, exercitationem voluptatem maiores quis cupiditate nihil doloribus earum quos nostrum esse minus, fuga eaque delectus blanditiis incidunt reprehenderit fugit excepturi accusantium beatae molestias qui neque recusandae omnis. Aut aliquam officiis quaerat natus asperiores praesentium repudiandae, et esse cupiditate beatae cumque minima corrupti neque facilis quibusdam eius tempora exercitationem debitis non. Veniam distinctio minima recusandae, corrupti commodi ea reiciendis aperiam vero quas voluptatem voluptatum laboriosam laborum sit atque incidunt tenetur provident quae magnam soluta, nostrum perspiciatis qui. Accusamus amet quaerat cum neque earum, voluptate iure! Hic omnis molestias obcaecati fugiat!</p>
            <p>Blanditiis ipsum facilis obcaecati, ipsa dolore ea expedita! Rem doloribus excepturi eveniet eos ut? Provident, dolorem eos. Voluptatum nostrum quasi delectus tempora impedit totam accusantium ullam dolore fugit quo vero officia sunt qui ducimus, asperiores, minus voluptates, perspiciatis molestias quidem temporibus. Sit adipisci minima ad alias numquam voluptas doloribus, cumque optio laborum enim dolorem incidunt possimus! Obcaecati aliquam asperiores corporis facere aperiam inventore! Quasi doloremque vitae accusamus iure nobis dicta perferendis molestias corporis ut earum fugiat voluptate architecto ea cum libero, id, laborum nemo provident? Accusamus tempore ab, consequatur ea dignissimos deleniti. Molestias optio quia deserunt perspiciatis laudantium, doloribus placeat?</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop()) {
                $("nav").addClass("black");
            } else {
                $("nav").removeClass("black");
            }
        })
    </script>
</body>

</html>