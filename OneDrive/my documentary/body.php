<?php
// body.php
// Basic page body template. Customize this file as needed for your backend.

function renderBody(): void
{
    echo "<!DOCTYPE html>\n";
    echo "<html lang=\"en\">\n";
    echo "<head>\n";
    echo "    <meta charset=\"UTF-8\">\n";
    echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    echo "    <title>Body</title>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "    <h1>Welcome</h1>\n";
    echo "    <p>This is the new body.php page. Add your backend logic here.</p>\n";
    echo "</body>\n";
    echo "</html>\n";
}

renderBody();
