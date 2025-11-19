<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Company Branding -->
            <div class="footer-brand">
                <a href="{{ url('/') }}" class="footer-logo-link">
                    <div class="footer-logo">
                        <span class="logo-primary">QD</span><span class="logo-secondary">MS</span>
                    </div>
                    <span class="footer-tagline">Quality Data Management System</span>
                </a>
            </div>

            <!-- Footer Info -->
            <div class="footer-info">
                <div class="footer-info-item">
                    <h4>Technology Deployment</h4>
                    <p>Quality Team Digital</p>
                </div>
                <div class="footer-info-item">
                    <h4>Mission</h4>
                    <p>IMPOSSIBLE IS NOTHING</p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/quality_production') }}">Quality Production</a></li>
                    <li><a href="{{ url('/rca_library') }}">RCA Library</a></li>
                    <li><a href="{{ url('/quality_ambassador') }}">Quality Ambassador</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p>&copy; {{ date('Y') }} PARKLAND JEPARA. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#" class="footer-link">QIP Procedure</a>
                </div>
            </div>
        </div>
    </div>
</footer>
