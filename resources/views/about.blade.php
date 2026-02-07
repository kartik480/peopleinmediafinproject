<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="About People in Microfinance - Learn about our mission, vision, and core values">
    
    <title>About Us - People in Microfinance</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&family=poppins:400,500,600,700" rel="stylesheet" />
    
    <style>
        :root {
            --primary-blue: #1e3a8a;
            --primary-blue-dark: #1e40af;
            --primary-blue-light: #3b82f6;
            --accent-teal: #0d9488;
            --accent-teal-light: #14b8a6;
            --accent-gold: #d97706;
            --accent-gold-light: #f59e0b;
            --text-dark: #1f2937;
            --text-gray: #6b7280;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Navigation */
        nav {
            background: var(--bg-white);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 1rem 0;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .nav-links a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--primary-blue);
        }
        
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .page-header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .page-header p {
            font-size: 1.25rem;
            opacity: 0.9;
        }
        
        /* Content Sections */
        .content-section {
            padding: 4rem 0;
        }
        
        .content-section:nth-child(even) {
            background: var(--bg-light);
        }
        
        .section-content {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--accent-teal) 0%, var(--accent-teal-light) 100%);
            border-radius: 2px;
        }
        
        .section-text {
            font-size: 1.125rem;
            color: var(--text-gray);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        
        .section-text strong {
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        /* Mission & Vision Cards */
        .mission-vision-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .mv-card {
            background: white;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            border-top: 4px solid var(--accent-teal);
        }
        
        .mv-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .mv-card h3 {
            font-size: 1.75rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .mv-card .icon {
            font-size: 2rem;
        }
        
        .mv-card p {
            font-size: 1.125rem;
            color: var(--text-gray);
            line-height: 1.8;
        }
        
        /* Core Values */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .value-card {
            background: white;
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            text-align: center;
            border-left: 4px solid var(--accent-teal);
        }
        
        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-left-color: var(--accent-teal-light);
        }
        
        .value-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .value-card h4 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }
        
        /* Footer */
        footer {
            background: var(--text-dark);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }
        
        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        
        .footer-links a:hover {
            opacity: 1;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .mission-vision-grid,
            .values-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container nav-container">
            <a href="/" class="logo">People in Microfinance</a>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/our-services">Our Services</a></li>
                <li><a href="/become-a-member">Member</a></li>
                <li><a href="/apply-for-loan">Loans</a></li>
                <li><a href="/contact-us">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>About Us</h1>
            <p>Learn more about our mission, vision, and commitment to financial inclusion</p>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="content-section">
        <div class="container">
            <div class="section-content">
                <h2 class="section-title">Company Overview</h2>
                <p class="section-text">
                    <strong>People in Microfinance</strong> is a socially responsible microfinance organization committed to providing financial assistance to small traders, daily earners, and member groups. We focus on providing accessible lending services while promoting financial discipline and responsible borrowing.
                </p>
                <p class="section-text">
                    Our organization understands the unique challenges faced by small business owners and individuals in underserved communities. Through our comprehensive microfinance solutions, we aim to bridge the financial gap and empower our members to achieve their economic goals.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="content-section">
        <div class="container">
            <div class="mission-vision-grid">
                <div class="mv-card">
                    <h3>
                        <span class="icon">🎯</span>
                        Our Mission
                    </h3>
                    <p>
                        To support small business owners and families by providing affordable microfinance services that promote financial stability and community development.
                    </p>
                </div>
                <div class="mv-card">
                    <h3>
                        <span class="icon">👁️</span>
                        Our Vision
                    </h3>
                    <p>
                        To become a reliable microfinance institution empowering small traders and low-income communities through transparent financial support.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="content-section">
        <div class="container">
            <div class="section-content">
                <h2 class="section-title">Core Values</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">⚖️</div>
                        <h4>Integrity</h4>
                        <p>We conduct our business with honesty, ethics, and moral principles in all our interactions.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🔍</div>
                        <h4>Transparency</h4>
                        <p>We maintain open and clear communication about our processes, terms, and conditions.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🤝</div>
                        <h4>Customer Commitment</h4>
                        <p>We are dedicated to serving our members with excellence and understanding their needs.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🌍</div>
                        <h4>Financial Inclusion</h4>
                        <p>We believe in providing equal access to financial services for all members of society.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">❤️</div>
                        <h4>Social Responsibility</h4>
                        <p>We are committed to making a positive impact on the communities we serve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <h3 style="margin-bottom: 1rem; font-size: 1.5rem;">People in Microfinance</h3>
                <p style="opacity: 0.8; margin-bottom: 2rem;">
                    Empowering communities through responsible microfinance solutions
                </p>
                <div class="footer-links">
                    <a href="/">Home</a>
                    <a href="/about-us">About Us</a>
                    <a href="/#services">Services</a>
                    <a href="/contact-us">Contact</a>
                    <a href="/privacy-policy">Privacy Policy</a>
                    <a href="/terms-and-conditions">Terms of Service</a>
                </div>
                <div style="margin: 2rem 0; padding: 1.5rem 0; border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                    <h4 style="font-size: 1.125rem; font-weight: 600; margin-bottom: 0.75rem; opacity: 0.9;">Working Hours:</h4>
                    <p style="opacity: 0.8; margin-bottom: 0.5rem; font-size: 1rem;">Monday to Saturday</p>
                    <p style="opacity: 0.8; font-size: 1rem;">10:00 AM to 6:00 PM</p>
                </div>
                <p style="opacity: 0.6; margin-top: 2rem; font-size: 0.875rem;">
                    © {{ date('Y') }} People in Microfinance. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
