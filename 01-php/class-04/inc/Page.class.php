<?php
    class Page {
        public static $title;
        /**
         * @return string title
         * @return string
         */
        public static function pageHeader(string $title) : string {
            $htmlHeader = '
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>'.$title.'</title>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
                    <link rel="stylesheet" href="./css/style.css">
                </head>
                <body>
            ';
            return $htmlHeader;
        }
        /**
         * @return string headerCssClass
         * @return string
         */
        // $headerCssClass="" we dont need to set all times.
        public static function pageBanner(string $headerCssClass="") : string {
            $htmlBanner = '
            <header>
                <section class="'.$headerCssClass.'">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </li>
                    </ul>
                    <nav>
                        <article>
                            <aside>
                                <i class="fa-solid fa-fan"></i>
                            </aside>
                            <h3>
                                FLEX
                            </h3>
                        </article>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <details>
                            <summary class="fa-solid fa-bars"></summary>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#skills">Skills</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </details>
                    </nav>
                    <article>
                        <h2>
                            DIGITAL MARKETING
                        </h2>
                        <h5>
                            MORE VISITORS TO YOUR WEBSITE
                        </h5>
                        <a href="#">
                            LET US DESIGN
                        </a>
                    </article>
                </section>
            </header>
            ';
            return $htmlBanner;
        }
        /**
         * @return string
         */
        public static function mainContent() : string {
            $mainContent = '<main>';
            //funciton inside of the class, call self::
            $mainContent .= self::servicesRow(); 
            // if it's not static, use $this->
            // $mainContent .= $this->servicesRow(); 
            $mainContent .= self::portfolioRow(); 
            $mainContent .= self::teamRow(); 
            $mainContent .= self::contactRow(); 
            $mainContent .= '</main>';
            return $mainContent;
        }
        /**
         * @return string
         */
        public static function servicesRow() : string {
            $row = '
            <section class="row services" id="services">
                <article>
                    <h2>
                        our services
                    </h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </article>
                <section>
                    <aside>
                        <i class="fa-regular fa-file-code"></i>
                        <h4>
                            HTML5 CODING
                        </h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut natus fugiat optio quidem suscipit earum mollitia at recusandae blanditiis?
                        </p>
                    </aside>
                    <aside>
                        <i class="fa-solid fa-paper-plane"></i>
                        <h4>
                            OUR SUPPORT
                        </h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut natus fugiat optio quidem suscipit earum mollitia at recusandae blanditiis?
                        </p>
                    </aside>
                    <aside>
                        <i class="fa-solid fa-building-columns"></i>
                        <h4>
                            OUR DESIGN
                        </h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut natus fugiat optio quidem suscipit earum mollitia at recusandae blanditiis?
                        </p>
                    </aside>
                    <aside>
                        <i class="fa-solid fa-flask"></i>
                        <h4>
                            GO FOR MOBILE
                        </h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores aut natus fugiat optio quidem suscipit earum mollitia at recusandae blanditiis?
                        </p>
                    </aside>
                </section>
            </section>
            ';
            return $row;
        }
        /**
         * @return string
         */
        public static function portfolioRow():string{
            $row = '
            <section class="row portfolio" id="portfolio">
                <article>
                    <h2>
                        our portfolio
                    </h2>
                    <p>
                        AMAZING WORK FOR OUR CLIENTS
                    </p>
                </article>
                <section>
                    <figure>
                        <img src="./img/pic-01.jpg" alt="pic-01">
                        <figcaption>
                            <h5>
                                new walk
                            </h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/pic-02.jpg" alt="pic-02">
                        <figcaption>
                            <h5>
                                new boat
                            </h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/pic-03.jpg" alt="pic-03">
                        <figcaption>
                            <h5>
                                Big City
                            </h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/pic-04.jpg" alt="pic-04">
                        <figcaption>
                            <h5>
                                gray street
                            </h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/pic-05.jpg" alt="pic-05">
                        <figcaption>
                            <h5>
                                office
                            </h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/pic-06.jpg" alt="pic-06">
                        <figcaption>
                            <h5>
                                new environment
                            </h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/pic-07.jpg" alt="pic-07">
                        <figcaption>
                            <h5>
                                venice
                            </h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./img/pic-08.jpg" alt="pic-08">
                        <figcaption>
                            <h5>
                                train trail
                            </h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </figcaption>
                    </figure>
                </section>
            </section>
            ';
            return $row;
        }
        /**
         * @return string
         */
        public static function teamRow():string{
            $row = '
            <section class="row team" id="team">
                <article>
                    <h2>our team</h2>
                    <p>
                        OUR PEOPLE ARE VERY UNITED FOR YOUR SUCCESS
                    </p>
                </article>
                <!-- TEAM CONTENT -->
                <section>
                    <!-- TEAM GALLERY -->
                    <article class="team-gallery">
                        <figure>
                            <img src="./img/pic-17.jpg" alt="Pic-17">
                            <figcaption>
                                <h4>CINDY</h4>
                                <small>developer</small>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="./img/pic-16.jpg" alt="Pic-16">
                            <figcaption>
                                <h4>JIM</h4>
                                <small>SALESMAN</small>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="./img/pic-15.jpg" alt="Pic-15">
                            <figcaption>
                                <h4>KEVIN</h4>
                                <small>ACCOUNTANT</small>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="./img/pic-14.jpg" alt="Pic-14">
                            <figcaption>
                                <h4>MICHAEL</h4>
                                <small>MANAGER</small>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </article>
                    <!-- TEAM GALLERY END -->
                    <!-- SKILLS -->
                    <section class="skills" id="skills">
                        <article>
                            <h3>Design Skills</h3>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                        </article>
                        <section>
                            <aside>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sed, odio eius, velit quibusdam nihil officia iusto doloremque suscipit alias doloribus. Laboriosam earum obcaecati placeat amet dicta velit deleniti totam error! Voluptatibus veniam placeat porro excepturi unde maiores necessitatibus quisquam quidem? Saepe nam aut laborum?
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis expedita modi assumenda possimus! Dolores, minus maiores fuga sunt cupiditate consequatur, eveniet quisquam voluptas dolorum natus suscipit dignissimos recusandae enim tempora unde? Fugiat perferendis dicta id magni. Totam corrupti, quisquam facilis vel possimus non aliquid perspiciatis eum consequatur quaerat itaque eligendi.
                                </p>
                            </aside>
                            <ul>
                                <li>
                                    <h6>
                                        <small>
                                            photoshop 90%
                                        </small>
                                    </h6>
                                </li>
                                <li>
                                    <h6>
                                        <small>
                                            HTML CSS 80%
                                        </small>
                                    </h6>
                                </li>
                                <li>
                                    <h6>
                                        <small>
                                            development 70%
                                        </small>
                                    </h6>
                                </li>
                                <li>
                                    <h6>
                                        <small>
                                            marketing 80%
                                        </small>
                                    </h6>
                                </li>
                            </ul>
                        </section>
                    </section>
                    <!-- SKILLS END -->
                </section>
                <!-- TEAM CONTENT -->
            </section>
            ';
            return $row;
        }
        /**
         * @return string
         */
        public static function contactRow():string{
            $row = '
            <section class="row contact" id="contact">
                <article>
                    <h2>
                        Contact
                    </h2>
                    <p>
                        SEND A MESSAGE TO US
                    </p>
                </article>
                <section>
                    <article>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente modi debitis illo, autem magnam, iure odit ipsum quae, porro unde repudiandae voluptas cum. Eligendi a repellendus at vero fuga possimus iure! Alias fugiat quo nesciunt.
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, dicta impedit! Iure expedita aliquam ipsa reiciendis magnam natus recusandae modi molestias autem eum placeat aut, voluptatibus, temporibus adipisci porro quia.
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam sequi, delectus maiores aperiam nostrum id, omnis quisquam, ratione dicta adipisci a quo cumque provident optio.
                        </p>
                        <ul>
                            <li>
                                Phone: 033-033-0660
                            </li>
                            <li>
                                Email:
                                <a href="mailto:info@company.com">
                                    info@company.com
                                </a>
                            </li>
                            <li>
                                Address:
                                <address>
                                    880 De Best Studio, Fork Street, San Francisco
                                </address>
                            </li>
                        </ul>
                    </article>
                    <section>
                        <form action="#">
                            <input type="text" name="name" id="name" placeholder="Your Name">
                            <input type="email" name="email" id="email" placeholder="Your Email">
                            <input type="text" name="subject" id="subject" placeholder="Subject">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                            <input type="submit" value="SEND MESSAGE">
                        </form>
                    </section>
                </section>
            </section>
            ';
            return $row;
        }
        // private static function renderGallery($fileContent){
        // }
        /**
         * @return string
         */
        public static function pageFooter() : string {
            $htmlFooter = '
            <footer>
                <p>
                    Copyright &copy; 2030 Company Name. Design: Flex Design
                </p>
                <a href="#">
                    BACK TO TOP
                </a>
            </footer>
            ';
            return $htmlFooter;
        }
        /**
         * @return string
         */
        public static function pageEnd() : string {
            $htmlPageEnd = '
                </body>
            </html>
            ';
            return $htmlPageEnd;
        }
        public static function playerTable(array $players) {
            $table = '
                <table>
                    <caption>Player Table</caption>
                    <thead>
                        <tr>
                            <th>
                                <a href="?sortby=id">ID</a>
                            </th>
                            <th>
                                <a href="?sortby=name">Player Name</a>
                            </th>
                            <th>
                                <a href="?sortby=pos">Position</a>
                            </th>
                            <th>
                                <a href="?sortby=bat">Bat</a>
                            </th>
                            <th>
                                <a href="?sortby=throw">Throw</a>
                            </th>
                            <th>
                                <a href="?sortby=age">Age</a>
                            </th>
                            <th>
                                <a href="?sortby=height">Height</a>
                            </th>
                            <th>
                                <a href="?sortby=weight">Weight</a>
                            </th>
                            <th>
                                <a href="?sortby=bPlace">Birth Place</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>'.
                        self::playerRow($players)
                    .'</tbody>
                </table>
            ';
            return $table;
        }
        private static function playerRow(array $players){
            $rowList = "";
            foreach ($players as $singlePlayer){
                $rowList .= "
                    <tr>
                        <td>".$singlePlayer->getId()."</td>
                        <td>".$singlePlayer->getName()."</td>
                        <td>".$singlePlayer->getPosition()."</td>
                        <td>".$singlePlayer->getBat()."</td>
                        <td>".$singlePlayer->getThrow()."</td>
                        <td>".$singlePlayer->getAge()."</td>
                        <td>".$singlePlayer->getHeight()."</td>
                        <td>".$singlePlayer->getWeight()."</td>
                        <td>".$singlePlayer->getBirthPlace()."</td>
                    </tr>
                ";
            }
            return $rowList;
        }
        private static function playerForm(){
            // $_SERVER["PHP_SELF"] : Global Variable
            $form = ' 
                <form action='.$_SERVER["PHP_SELF"].' method="post">
                    <label>
                    ID
                    <input type="number" name="id" placeholder="Player ID">
                    </label>
                    <label>
                    Name
                    <input type="text" name="name" placeholder="Player Name">
                    </label>
                    <label>
                    Position
                    <input type="text" name="position" placeholder="Player Position">
                    </label>
                    <label>
                    Bat
                    <input type="text" name="bat" placeholder="Player Bat">
                    </label>
                    <label>
                    Throw
                    <input type="number" name="throw" placeholder="Player Throw">
                    </label>
                    <label>
                    Age
                    <input type="number" name="age" placeholder="Player Age">
                    </label>
                    <label>
                    Height
                    <input type="number" name="height" placeholder="Player Height">
                    </label>
                    <label>
                    Weight
                    <input type="number" name="weight" placeholder="Player Weight">
                    </label>
                    <label>
                    Birth Place
                    <input type="number" name="bplace" placeholder="Player BirthPlace">
                    </label>
                    <input type="submit" value="Submit">
                </form>
            ';
            return $form;
        }
    }