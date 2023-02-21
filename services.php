<?php require_once 'header.php'; ?>



<section class="services-section  ">
    <div class="container">
       <div class="title">
        <h2>services</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum,
          aperiam!
        </p>
      </div>
        <div class="card-container">
            <div class="card-content">
                <div class="card">
                    <div class="card-img">
                        <!-- <i class="fas fa-project-diagram"></i> -->

                        <img src="./pics/dataimg.jpg" alt="design image">
                    </div>
                </div>
                <div class="description">
                    <h3>
                        web designing</h3>
                    <p class="card-text">we design websites that suit your needs, from commercial websites, blogging and portfolio websites</p>
                </div>

            </div>


            <div class="card-content shrink">
                <div class="card">
                    <div class="card-img">
                        <!-- <i class="fas fa-satellite-dish"></i> -->

                        <img src="./pics/computer.jpeg" alt="design image">
                    </div>
                </div>
                <div class="description">
                    <h3>
                        web development</h3>
                    <p class="card-text">I will develop your websites using the shortest time possible and deliver your source codes within two working days</p>
                </div>

            </div>
            <div class="card-content shrink1">
                <div class="card">
                    <div class="card-img">
                        <!-- <i class="fas fa-satellite"></i> -->
                        <img src="./pics/hostlaptop.jpg" alt="design image">
                    </div>

                </div>
                <div class="description">
                    <h3>web managing
                    </h3>
                    <p class="card-text">I also manage commercial websites.</p>
                </div>

            </div>
            <!-- <div class="card-content shrink2">
                <div class="card">
                    <div class="card-img"> -->
                        <!-- <i class="fas fa-project-diagram"></i> -->

                        <!-- <img src="./pics/dataimg.jpg" alt="design image">
                    </div>
                </div>
                <div class="description">
                    <h3>
                        Data Analysis</h3>
                    <p class="card-text"> i will analyse your data and build models and algorithims that predict and forecast your business perfomance.</p>
                </div>

            </div> -->
        </div>
        <button class="shrinkBtn">see more <i class="fas fa-angle-double-right"></i></button>

    </div>
    <!-- <div class="cardText-div">
        <div class="container">
            <h4 class="contact-text">contact as for an instance service(s) by the click of a button. <button class="btn" type="submit"> <a href="tel: +254714819979"><i class="fas fa-phone-alt fa-1x"></i> call us</a></button> </h4>
        </div>
    </div> -->




</section>
<script async>
    const shrink = document.querySelector('.shrink');
    const shrink1 = document.querySelector('.shrink1');
    const shrink2 = document.querySelector('.shrink2');
    const show1 = document.querySelector('.shrinkBtn');

    show1.addEventListener('click', () => {
        shrink.classList.toggle('show');

    })
    show1.addEventListener('click', () => {
        shrink1.classList.toggle('show');

    })
    show1.addEventListener('click', () => {
        shrink2.classList.toggle('show');

    })
</script>
<?php require_once 'footer.php'; ?>