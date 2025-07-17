
<footer class="footer">    
    <div class="footer-content">
        <ul class="footer-links">
            <li><a href="#" id="contact-toggle">Contact Info</a></li>
            <div id="contact-info" style="display: none;">
                <p>Email: harmanjotkaur005@algomau.ca</p>
            </div>
            <li><a href = "#" id = "about-toggle">About</a></li>
            <div id="about-info" style="display: none;">
                <p>A simple reminder app built using PHP and MySQL during the course Web Data Management</p>
            </div>
            <li><a href="https://www.linkedin.com/in/harmanjot-kaur-41b6b7180/">LinkedIn</a></li>
            <li><a href="https://github.com/Harmanjot14">GitHub</a></li>
        </ul>
        <p>Harmanjot Kaur &copy; <?php echo date('Y'); ?> </p>
       
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('contact-toggle').addEventListener('click', function(){
                    event.preventDefault();
                    var contactInfo = document.getElementById('contact-info');
                    contactInfo.style.display = (contactInfo.style.display === 'none') ? 'block' : 'none';
                });
                document.getElementById('about-toggle').addEventListener('click', function(){
                    event.preventDefault();
                    var aboutInfo = document.getElementById('about-info');
                    aboutInfo.style.display = (aboutInfo.style.display === 'none') ? 'block' : 'none';
                });
            });
        </script>                                                              
    </div>
</footer>

</div>
</body>
</html>