<?php
$archivo = basename($_SERVER['PHP_SELF']);
$item = strstr($archivo, '_', true);
if ($item == 'item') {
    echo '    <footer class="site-footer seccion">
            <div class="contenido-footer contenedor">
                <div class="logotipo">
                    <a href="index.html">
                        <img src="../img/png.png" alt="logotipo">
                    </a>
                </div>
                <div class="redes-sociales">
                    <a href="https://www.instagram.com/rosalimon.ve/"><img src="../img/instagram.svg" alt=""></a>
                    <a href="#"><img src="../img/whatsapp.svg" alt=""></a>
                </div>
                <nav class="navegacion-footer">
                    <a href="../contacto.html">Contacto</a>
                </nav>
            </div>
            <p>Anaco, 6003 Edo. Anzoátegui, Venezuela.</p>
            <p>Todos Los Derechos Reservados 2020&copy;</p>
        </footer>
    
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script src="../js/lightbox.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
    </body>
    
    </html>';
} else {
    echo '
    <footer class="site-footer seccion">
        <div class="contenido-footer contenedor">
            <div class="logotipo">
                <a href="index.php">
                    <img src="img/png.png" alt="logotipo">
                </a>
            </div>
            <div class="redes-sociales">
                    <a href="https://www.instagram.com/rosalimon.ve/"><img src="img/instagram.svg" alt=""></a>
                    <a href="#"><img src="img/whatsapp.svg" alt=""></a>
            </div>
                <nav class="navegacion-footer">
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
            <p>Anaco, 6003 Edo. Anzoátegui, Venezuela.</p>
            <p>Todos Los Derechos Reservados 2020&copy;</p>
    </footer>
        </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
';
}