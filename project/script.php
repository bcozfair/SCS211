<!-- slide -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var carouselImages = document.querySelectorAll(".carousel-inner img");

        carouselImages.forEach(function(image) {
            image.addEventListener("mouseenter", function() {
                this.style.transition = "transform 0.3s ease-in-out";
                this.style.transform = "scale(1.1)";
            });

            image.addEventListener("mouseleave", function() {
                this.style.transition = "transform 0.3s ease-in-out";
                this.style.transform = "scale(1)";
            });
        });
    });
</script>

<!-- nav -->
<script>
    var menuHolder = document.getElementById("menuHolder");
    var siteBrand = document.getElementById("siteBrand");

    function menuToggle() {
        if (menuHolder.className === "drawMenu") menuHolder.className = "";
        else menuHolder.className = "drawMenu";
    }
    if (window.innerWidth < 426) siteBrand.innerHTML = "Car To U";
    window.onresize = function() {
        if (window.innerWidth < 420) siteBrand.innerHTML = "Car To U";
        else siteBrand.innerHTML = "Car To U";
    };
</script>

<script>
    src =
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js";
    integrity =
        "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL";
    crossorigin = "anonymous";
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<!-- footer -->
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<!-- chat bot -->
<script>
    window.embeddedChatbotConfig = {
        chatbotId: "M975bErIhnDY4wpb3L7N_",
        domain: "www.chatbase.co",
    };
</script>
<script src="https://www.chatbase.co/embed.min.js" chatbotId="M975bErIhnDY4wpb3L7N_" domain="www.chatbase.co" defer></script>

<!-- cookie -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // เรียกใช้ฟังก์ชันทันทีหลังจากโหลดหน้าเว็บเสร็จ
        const cookieContainer = document.getElementById("cookie");
        const acceptBtn = document.getElementById("acceptBtn");
        const declineBtn = document.getElementById("declineBtn");

        // ฟังก์ชันเพื่อบันทึกสถานะการยอมรับคุกกี้ลงใน localStorage
        function setCookieAccepted() {
            localStorage.setItem("cookieAccepted", "true");
        }

        // ฟังก์ชันเพื่อตรวจสอบสถานะการยอมรับคุกกี้
        function checkCookieAccepted() {
            return localStorage.getItem("cookieAccepted") === "true";
        }

        // ถ้ายอมรับคุกกี้แล้ว ซ่อน div#cookie
        if (checkCookieAccepted()) {
            cookieContainer.style.display = "none";
        }

        // เมื่อคลิกที่ปุ่มยอมรับ
        acceptBtn.addEventListener("click", function() {
            setCookieAccepted();
            cookieContainer.style.display = "none";
        });

        // เมื่อคลิกที่ปุ่มปฏิเสธ
        declineBtn.addEventListener("click", function() {
            // ทำการปฏิเสธคุกกี้ หรือทำตามที่ต้องการ
            cookieContainer.style.display = "none";
        });
    });
</script>

<!-- modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const forms = document.querySelectorAll(".forms"),
            pwShowHide = document.querySelectorAll(".eye-icon"),
            signupLink = document.querySelectorAll(".signup-link"),
            loginLink = document.querySelectorAll(".login-link");

        pwShowHide.forEach((eyeIcon) => {
            eyeIcon.addEventListener("click", () => {
                let pwFields =
                    eyeIcon.parentElement.parentElement.querySelectorAll(".password");

                pwFields.forEach((password) => {
                    if (password.type === "password") {
                        password.type = "text";
                        eyeIcon.classList.replace("bx-hide", "bx-show");
                        return;
                    }
                    password.type = "password";
                    eyeIcon.classList.replace("bx-show", "bx-hide");
                });
            });
        });

        signupLink.forEach((link) => {
            link.addEventListener("click", (e) => {
                e.preventDefault();
                forms.forEach((form) => {
                    form.classList.remove("show-login");
                    form.classList.add("show-signup");
                });
            });
        });

        loginLink.forEach((link) => {
            link.addEventListener("click", (e) => {
                e.preventDefault();
                forms.forEach((form) => {
                    form.classList.remove("show-signup");
                    form.classList.add("show-login");
                });
            });
        });
    });
</script>

<!-- promoton -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // นำรายการ Card ทั้งหมด
        var cards = document.querySelectorAll(".cards .card");

        // สุ่มลำดับการแสดงผล
        var shuffledCards = Array.from(cards).sort(() => Math.random() - 0.5);

        // นำการแสดงผล Card ที่สุ่มแล้วใส่กลับ
        var cardsContainer = document.querySelector(".cards");
        cardsContainer.innerHTML = "";
        shuffledCards.forEach(function(card) {
            cardsContainer.appendChild(card);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        // เรียกใช้ฟังก์ชันเมื่อหน้าเว็บโหลดเสร็จ
        autoScrollCards();
    });

    function autoScrollCards() {
        const cardContainer = document.getElementById("cardContainer");
        const cards = cardContainer.querySelectorAll(".card");

        let currentIndex = 0;

        function showCard(index) {
            cards.forEach((card, i) => {
                card.style.display = i === index ? "block" : "none";
            });
        }

        function nextCard() {
            currentIndex = (currentIndex + 1) % cards.length;
            showCard(currentIndex);
        }

        // เริ่มต้นด้วยการแสดง Card แรก
        showCard(currentIndex);

        // เริ่มต้นการเลื่อน Card ทุก 5 วินาที
        setInterval(nextCard, 5000);
    }
</script>

<!-- search -->
<script>
    function submitForm() {
        // ตรวจสอบว่าฟอร์มถูกต้อง
        if (document.getElementById("bookingForm").checkValidity()) {
            // ทำ redirection ไปยัง URL ที่กำหนด
            window.location.href = "product.php#promotion";
        } else {
            // แสดงข้อความหรือทำอย่างอื่นเมื่อฟอร์มไม่ถูกต้อง
            alert("กรุณากรอกข้อมูลให้ครบถ้วน");
        }
    }
</script>
<!-- facebook -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v19.0" nonce="aAPwiSpU"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.querySelector(".carousel-container");

        container.addEventListener("wheel", (e) => {
            e.preventDefault();
            container.scrollTop += e.deltaY;
        });
    });
</script>

<!-- sort -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // เมื่อค่าใน dropdown เปลี่ยน
        $("#filter-dropdown").change(function() {
            var filter = $(this).val();

            // ถ้าค่าเป็น "all" ให้แสดงทุกรายการสินค้า
            if (filter === "all") {
                $(".product").show();
            } else {
                // ซ่อนทุกรายการสินค้า
                $(".product").hide();
                // แสดงเฉพาะรายการที่ตรงกับ filter
                $("." + filter).show();
            }
        });
    });
</script>

<!-- alert -->
<script>
    function showAlert() {
        // ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือยัง
        var isLoggedIn = checkUserLoginStatus(); // ให้แทนที่ด้วยการตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือยัง

        if (isLoggedIn) {
            // ถ้าเข้าสู่ระบบแล้วให้เปิด link โปรโมรชั่น
            window.location.href = "ลิงก์โปรโมรชั่นที่ต้องการ";
        } else {
            // ถ้ายังไม่เข้าสู่ระบบให้แสดง alert
            showCustomAlert();
        }
    }

    function showCustomAlert() {
        var customAlert = document.getElementById('custom-alert');
        customAlert.style.display = 'block';
    }

    function closeCustomAlert() {
        var customAlert = document.getElementById('custom-alert');
        customAlert.style.display = 'none';
    }

    function checkUserLoginStatus() {
        // ทำการตรวจสอบสถานะการเข้าสู่ระบบ และคืนค่าเป็น true หากเข้าสู่ระบบแล้ว หรือ false หากยังไม่เข้าสู่ระบบ
        // คุณต้องเขียนโค้ดตรวจสอบสถานะการเข้าสู่ระบบที่เป็นไปตามโครงสร้างของเว็บไซต์ของคุณ
        // เช่น การใช้ cookies, sessions, หรือ APIs เพื่อตรวจสอบสถานะการเข้าสู่ระบบ
        // ตัวอย่าง: return true; หรือ return false;
    }
</script>