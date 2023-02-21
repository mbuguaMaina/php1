<?php require_once 'header.php'; ?>

<div class="container section-center" id="skils>
  <div class="title">
        <h2>my skills</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum,
          aperiam!
        </p>
      </div>

    <div class="containers">

        <div class="skills-image">
            <img src="./pics/darklaptop.jpeg" alt="">
            <p class="skillsparagraph">Through my journey, I have mustered quite a skill in a number of Computer languages.</p>
        </div>


        <div class="right-container">
            <div class="sub-title">
                <h4>This include...</h4>
            </div>
            <div class="bar">
                <div class="info">
                    <span>html</span>
                    <span>95%</span>
                </div>
                <div class="line html"></div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>css</span>
                    <span>95%</span>
                </div>
                <div class="line css"></div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>javasript</span>
                    <span>80%</span>
                </div>
                <div class="line javascript"></div>
            </div>
            <div class="skillhide">
                <div class="bar">
                    <div class="info">
                        <span>php</span>
                        <span>75%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bar">
                    <div class="info">
                        <span>mysql</span>
                        <span>80%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>
                <!-- <div class="bar">
                    <div class="info">
                        <span>python</span>
                        <span>65%</span>
                    </div>
                    <div class="line python"></div>
                </div>
                <div class="bar">
                    <div class="info">
                        <span>R</span>
                        <span>95%</span>
                    </div>
                    <div class="line R"></div>
                </div> -->
            </div>
            <button class="moreBtn skillBtn"> see more</button>

        </div>
    </div>

</div>
<script async>
    const skillBtn = document.querySelector('.skillBtn');
    const skillShow = document.querySelector('.skillhide');

    skillBtn.addEventListener('click', () => {
        skillShow.classList.toggle('skillshow');
        if(skillBtn.innerText == 'SEE MORE'){
            skillBtn.innerText= 'SEE LESS';
        }
    })
</script>
<?php require_once 'footer.php'; ?>