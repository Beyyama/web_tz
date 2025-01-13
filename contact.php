<?php include("./include/head.php"); ?>

<main>
    <h1>Kontakt</h1>
    <p>Wir freuen uns über Ihre Nachricht! Bitte füllen Sie das Formular aus, um mit uns in Kontakt zu treten.</p>
    
    <form action="send_message.php" method="POST">
        <label for="name">Ihr Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Ihre E-Mail-Adresse:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Ihre Nachricht:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Nachricht senden</button>
    </form>
</main>

<?php include('./include/footer.php'); ?>