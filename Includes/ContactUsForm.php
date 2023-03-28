<?php include "./AdditionalPHP/checkAccess.php"; ?>

<head>
    <script defer src="validateContactInput.js"></script>
</head>

<div id="contact-submission" class="contact-section">
    <div class="contact-us">
        <div class="subtitle">
            <h2>Contact Us</h2>
            <p>
In 2000, CakeWalk was established. From the moment our first cake went into the oven, we have operated with a simple vision: of creating fresh, delicious, innovative products. We considered them our 'prized pastries'.

Our mission has never wavered and every day we strive to keep the promise we made to our customers on our very first day :)</p>
            <span class="send-input-message"></span>
            <span id="sendError" class="input-error"></span>
        </div>

        <form id="contactForm" method="POST" >
            <label for="customerName">Name <em>&#x2a;</em></label>
            <span id="nameError"class="input-error"></span>
            <input id="customerName" name="customerName" required type="text" />

            <label for="customerEmail">Email <em>&#x2a;</em></label>
            <span id="emailError" class="input-error"></span>
            <input id="customerEmail" name="customerEmail" required type="email" />

            <label for="customerPhone">Mobile Number</label>
            <span id="phoneError" class="input-error"></span>
            <input id="customerPhone" name="customerPhone" type="tel"/>
            
            <label for="orderNumber">Order Number</label>
            <input id="orderNumber" name="orderNumber" type="text" />
            
            <label for="customerNote">Your Message<em>&#x2a;</em></label>
            <span class="input-error"></span>
            <textarea id="customerNote" name="customerMessage" required rows="4"></textarea>
            <br>

            <div class="push-button">
                <span><button id="submit" name="submit">Submit</button></span>
            </div>
        </form>
    </div>
</div>