<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />

    <title>Frontend Mentor | Crowdfunding product page</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div class="header-wrapper">
          <div class="header-wrapper-navigation">
            <div class="header-logo">
              <img src="./images/logo.svg" alt="" />
            </div>
            <div class="header-nav">
              <div class="header-menu">
                <img src="./images/icon-hamburger.svg" alt="" />
              </div>
              <div class="list-items">
                <ul>
                  <li>About</li>
                  <li>Discover</li>
                  <li>Get Started</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="header-bg-img"></div>
        </div>
      </div>

      <div class="section">
        <div class="section one">
          <div class="first-section logo">
            <img src="./images/logo-mastercraft.svg" alt="" />
          </div>
          <div class="first-section">
            <div class="first-section head">
              <h2>Mastercraft Bamboo Monitor Riser</h2>
            </div>
            <div class="first-section body">
              <p>
                A beautiful & handcrafted monitor stand to reduce neck and eye
                strain.
              </p>
            </div>
            <div class="main-box">
              <div class="square-box">
                <p>Back this project</p>
              </div>
              <div class="circle-box">
                <img src="./images/icon-bookmark.svg" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="section two">
          <div class="second-sections">
            <div class="box-section">
              <h3>$89,914</h3>
              <p>of $100,000 backed</p>
            </div>
            <hr />
            <div class="box-section">
              <h3>5,007</h3>
              <p>total backers</p>
            </div>
            <hr />
            <div class="box-section">
              <h3>56</h3>
              <p>days left</p>
            </div>
          </div>
        </div>

        <div class="section three">
          <div class="third-section">
            <div class="third-section head">
              <p>About this project</p>
            </div>

            <div class="third-section body">
              <p>
                The Mastercraft Bamboo Monitor Riser is a sturdy and stylish
                platform that elevates your screen to a more comfortable viewing
                height. Placing your monitor at eye level has the potential to
                improve your posture and make you more comfortable while at
                work, helping you stay focused on the task at hand.
              </p>
              <p>
                Featuring artisan craftsmanship, the simplicity of design
                creates extra desk space below your computer to allow notepads,
                pens, and USB sticks to be stored under the stand.
              </p>
            </div>

            <div class="square-box1">
              <div class="boxs">
                <div class="box-head">
                  <h5>Bamboo Stand</h5>
                  <p>Pledge $25 or more</p>
                </div>
                <div class="box-body">
                  <p>
                    You get an ergonomic stand made of natural bamboo. You've
                    helped us launch our promotional campaign, and you’ll be
                    added to a special Backer member list.
                  </p>
                </div>
                <div class="box-price">
                  <p>101</p>
                  <p>left</p>
                </div>
                <div class="box-foot">Select Reward</div>
              </div>
            </div>
            <div class="square-box2">
              <div class="boxs">
                <div class="box-head">
                  <h5>Black Edition Stand</h5>
                  <p>Pledge $75 or more</p>
                </div>
                <div class="box-body">
                  <p>
                    You get a Black Special Edition computer stand and a
                    personal thank you. You’ll be added to our Backer member
                    list. Shipping is included.
                  </p>
                </div>
                <div class="box-price">
                  <p>64</p>
                  <p>left</p>
                </div>
                <div class="box-foot">Select Reward</div>
              </div>
            </div>

            <div class="square-box3">
              <div class="boxs">
                <div class="box-head">
                  <h5>Mahogany Special Edition</h5>
                  <p>Pledge $200 or more</p>
                </div>
                <div class="box-body">
                  <p>
                    You get two Special Edition Mahogany stands, a Backer
                    T-Shirt, and a personal thank you. You’ll be added to our
                    Backer member list. Shipping is included.
                  </p>
                </div>
                <div class="box-price">
                  <p>0</p>
                  <p>left</p>
                </div>
                <div class="box-foot">Out of Stock</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Selection modal start -->
        <div class="section-modal">
          <div class="section-modal wrapper">
            <div class="modal-header">
              <div class="modal-topic">
                <div>
                  <p>Back this project</p>
                </div>
                <div>
                  <img src="./images/icon-close-modal.svg" alt="" />
                </div>
              </div>
              <div class="modal-head">
                <p>
                  Want to support us in bringing Mastercraft Bamboo Monitor
                  Riser out in the world?
                </p>
              </div>
            </div>

            <div class="modal-box one">
              <div class="modal-box-wrapper">
                <div class="modal-box-head">
                  <div>
                    <input type="radio" name="" />
                  </div>
                  <div>
                    <p>Pledge with no reward</p>
                  </div>
                </div>
                <div class="modal-box-body">
                  <p>
                    Choose to support us without a reward if you simply believe
                    in our project. As a backer, you will be signed up to
                    receive product updates via email.
                  </p>
                </div>
              </div>
            </div>

            <div class="modal-box two">
              <div class="modal-box-wrapper">
                <div class="modal-box-head">
                  <div>
                    <input type="radio" id="" />
                  </div>
                  <div>
                    <p>Bamboo Stand</p>
                    <p>Pledge $25 or more</p>
                  </div>
                </div>
                <div class="modal-box-body">
                  <p>
                    You get an ergonomic stand made of natural bamboo. You've
                    helped us launch our promotional campaign, and you’ll be
                    added to a special Backer member list.
                  </p>
                </div>
                <div class="modal-price">
                  <p>101</p>
                  <p>left</p>
                </div>

                <hr />
                <!-- Selected pledge start -->
                <div class="pledge-start">
                  <p>Enter your pledge</p>
                  <div class="pledge">
                    <div>$25</div>
                    <div>Continue</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Selected pledge end -->
            <div class="modal-box three">
              <div class="modal-box-head">
                <div>
                  <input type="radio" name="" id="" />
                </div>
                <div>
                  <p>Black Edition Stand</p>
                  <p>Pledge $75 or more</p>
                </div>
              </div>
              <div class="modal-box-body">
                <p>
                  You get a Black Special Edition computer stand and a personal
                  thank you. You’ll be added to our Backer member list. Shipping
                  is included.
                </p>
              </div>
              <div class="modal-price">
                <p>64</p>
                <p>left</p>
              </div>
              <hr />
              <!-- Selected pledge start -->
              <div class="pledge-start">
                <p>Enter your pledge</p>
                <div class="pledge">
                  <div>$75</div>
                  <div>Continue</div>
                </div>
              </div>

              <!-- Selected pledge end -->
            </div>
            <div class="modal-box four">
              <div class="modal-box-head">
                <div><input type="radio" name="" id="" /></div>
                <div>
                  <p>Mahogany Special Edition</p>
                  <p>Pledge $200 or more</p>
                </div>
              </div>
              <div class="modal-box-body">
                <p>
                  You get two Special Edition Mahogany stands, a Backer T-Shirt,
                  and a personal thank you. You’ll be added to our Backer member
                  list. Shipping is included.
                </p>
              </div>

              <div class="modal-price">
                <p>0</p>
                <p>left</p>
              </div>

              <!-- Selected pledge  start -->
              <div class="pledge-start">
                <p>Enter your pledge</p>
                <div class="pledge">
                  <div>$200</div>
                  <div>Continue</div>
                </div>
              </div>
            </div>
            <!-- Selected pledge end -->
          </div>
        </div>
        <!-- Selection modal end -->

        <!-- Success modal start -->
        <div class="success-modal">
          <div class="success-modal wrapper">
            <div class="tick">
              <img src="./images/icon-check.svg" alt="" />
            </div>
            <div class="success-modal-head">
              <p>Thanks for your support!</p>
            </div>
            <div class="success-modal-para">
              <p>
                Your pledge brings us one step closer to sharing Mastercraft
                Bamboo Monitor Riser worldwide. You will get an email once our
                campaign is completed.
              </p>
            </div>
            <div class="btn">Got it!</div>
          </div>
        </div>

        <!-- Success modal end -->
      </div>
    </div>
    <script>
      const menu = document.querySelector(".header-menu");
      const listItem = document.querySelector(".list-items");
      let i = 0;
      menu.addEventListener("click", function () {
        // menu.children
        listItem.classList.toggle("show");
        if (i % 2 == 0) {
          menu.childNodes[1].src = `./images/icon-close-menu.svg`;
        } else {
          menu.childNodes[1].src = `./images/icon-hamburger.svg`;
        }
        i++;
      });

      const rewards = document.querySelectorAll(".box-foot");
      const modal = document.querySelector(".section-modal .wrapper");

      rewards.forEach((reward) => {
        reward.addEventListener("click", () => {
          modal.classList.toggle("show");
        });
      });

      const close = document.querySelector(".modal-topic div:nth-child(2)");
      close.addEventListener("click", function () {
        modal.classList.remove("show");
      });
      
      const pledges = document.querySelectorAll(".pledge div:nth-child(2)");
      
      const success = document.querySelector(".success-modal .wrapper");
      
      pledges.forEach((pledge) => {
        pledge.addEventListener("click", () => {
          success.classList.add("show");
          modal.classList.remove("show");
        });
      });
      
      document.querySelector('.btn').addEventListener('click',()=>{
        
        success.classList.remove("show");
      })

      
    </script>
  </body>
</html>
