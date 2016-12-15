            </div>
        </div>
    </body>
  <footer>Eldar Blog &COPY; <?= date('Y'); ?></footer>
</html>
<?php

// Close database connection
if (isset($connection)) {
  mysqli_close($connection);
}

?>