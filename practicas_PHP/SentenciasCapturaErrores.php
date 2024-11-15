<?php

try {
    throw new Exception("Error personalizado");
} catch (Exception $e) {
    echo 'Capturado: ', $e->getMessage();
}
