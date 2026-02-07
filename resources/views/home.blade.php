<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="People in Microfinance - Empowering Small Businesses & Communities Through Responsible Microfinance">
    
    <title>People in Microfinance - Empowering Small Businesses & Communities</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&family=poppins:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    <!-- Vite assets not needed - using inline styles -->
    
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
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-blue-dark) 100%);
            color: white;
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.95;
            line-height: 1.6;
        }
        
        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 0.875rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            font-size: 1rem;
            border: 2px solid transparent;
        }
        
        .btn-primary {
            background: var(--accent-teal);
            color: white;
        }
        
        .btn-primary:hover {
            background: var(--accent-teal-light);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .btn-secondary:hover {
            background: white;
            color: var(--primary-blue);
            transform: translateY(-2px);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }
        
        .btn-outline:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Section Styles */
        .section {
            padding: 5rem 0;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            color: var(--primary-blue);
        }
        
        .section-subtitle {
            text-align: center;
            font-size: 1.125rem;
            color: var(--text-gray);
            max-width: 600px;
            margin: 0 auto 3rem;
        }
        
        /* About Section */
        .about {
            background: var(--bg-light);
        }
        
        .about-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        
        .about-content h2 {
            font-size: 2rem;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
        }
        
        .about-content p {
            font-size: 1.125rem;
            color: var(--text-gray);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        
        /* Loan Services Section */
        .loan-services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }
        
        .loan-card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            overflow: hidden;
            border-top: 4px solid var(--accent-teal);
            cursor: pointer;
        }
        
        .loan-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-top-color: var(--accent-teal-light);
        }
        
        .loan-card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 1rem;
            padding: 1.5rem;
        }
        
        .loan-icon {
            font-size: 2.5rem;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--accent-teal) 0%, var(--accent-teal-light) 100%);
            border-radius: 0.75rem;
            flex-shrink: 0;
        }
        
        .loan-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            width: 100%;
        }
        
        .checkmark {
            color: var(--accent-teal);
            font-size: 1.25rem;
            font-weight: bold;
        }
        
        .loan-card .loan-name {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin: 0;
            line-height: 1.4;
            text-align: center;
        }
        
        /* Why Choose Us Section */
        .why-choose-us {
            background: var(--bg-light);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: white;
            padding: 1.25rem 1.5rem;
            border-radius: 0.75rem;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            border-left: 4px solid var(--accent-teal);
        }
        
        .feature-item:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow-lg);
            border-left-color: var(--accent-teal-light);
        }
        
        .feature-checkmark {
            color: var(--accent-teal);
            font-size: 1.5rem;
            font-weight: bold;
            flex-shrink: 0;
        }
        
        .feature-text {
            font-size: 1.125rem;
            font-weight: 500;
            color: var(--text-dark);
            line-height: 1.5;
        }
        
        /* FAQ Section */
        .faq-section {
            background: var(--bg-white);
        }
        
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .faq-item {
            background: var(--bg-white);
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-sm);
            transition: box-shadow 0.3s;
            overflow: hidden;
        }
        
        .faq-item:hover {
            box-shadow: var(--shadow-md);
        }
        
        .faq-question {
            padding: 1.5rem 2rem;
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-blue);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        
        .faq-question::after {
            content: '▼';
            font-size: 0.875rem;
            color: var(--accent-teal);
            transition: transform 0.3s;
            flex-shrink: 0;
        }
        
        .faq-answer {
            padding: 0 2rem 1.5rem 2rem;
            font-size: 1.125rem;
            color: var(--text-gray);
            line-height: 1.7;
            display: block;
        }
        
        /* Testimonials Section */
        .testimonials-section {
            background: var(--bg-light);
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .testimonial-card {
            background: var(--bg-white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid #e5e7eb;
            position: relative;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        
        .testimonial-quote {
            font-size: 3rem;
            color: var(--accent-teal);
            opacity: 0.3;
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            line-height: 1;
        }
        
        .testimonial-text {
            font-size: 1.125rem;
            color: var(--text-dark);
            line-height: 1.7;
            font-style: italic;
            margin-top: 1.5rem;
            position: relative;
            z-index: 1;
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
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .cta-buttons {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
                text-align: center;
            }
            
            .loan-services-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
                margin-top: 2rem;
            }
            
            .loan-card-content {
                padding: 1.25rem;
                gap: 1rem;
            }
            
            .loan-icon {
                width: 50px;
                height: 50px;
                font-size: 2rem;
            }
            
            .loan-card .loan-name {
                font-size: 1rem;
            }
            
            .checkmark {
                font-size: 1.125rem;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
                margin-top: 2rem;
            }
            
            .feature-item {
                padding: 1rem 1.25rem;
            }
            
            .feature-text {
                font-size: 1rem;
            }
            
            .feature-checkmark {
                font-size: 1.25rem;
            }
            
            .faq-question {
                padding: 1.25rem 1.5rem;
                font-size: 1.125rem;
            }
            
            .faq-answer {
                padding: 0 1.5rem 1.25rem 1.5rem;
                font-size: 1rem;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                margin-top: 2rem;
            }
            
            .testimonial-card {
                padding: 1.5rem;
            }
            
            .testimonial-quote {
                font-size: 2.5rem;
                top: 0.75rem;
                left: 1.25rem;
            }
            
            .testimonial-text {
                font-size: 1rem;
                margin-top: 1rem;
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
                <li><a href="#home">Home</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/our-services">Our Services</a></li>
                <li><a href="/become-a-member">Member</a></li>
                <li><a href="/apply-for-loan">Loans</a></li>
                <li><a href="/contact-us">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Empowering Small Businesses & Communities Through Microfinance</h1>
                <p class="hero-subtitle">
                    We provide responsible and affordable financial support to small traders, daily income earners, 
                    and group members through structured microfinance lending programs.
                </p>
                <div class="cta-buttons">
                    <a href="/become-a-member" class="btn btn-primary">Become a Member</a>
                    <a href="/apply-for-loan" class="btn btn-secondary">Apply for Loan</a>
                    <a href="/contact-us" class="btn btn-secondary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container">
            <div class="about-content">
                <h2>Welcome to People in Microfinance</h2>
                <p>
                    <strong>People in Microfinance</strong> is a trusted microfinance institution dedicated to 
                    supporting small business owners, daily earners, and community groups. Our services are 
                    designed to provide easy access to personal and consumer financing through responsible 
                    and transparent lending practices.
                </p>
                <p>
                    We aim to strengthen small entrepreneurs and families by providing reliable financial 
                    solutions. With years of experience in microfinance, we understand the unique challenges 
                    faced by small businesses and individuals, and we're committed to helping you achieve 
                    your financial goals.
                </p>
            </div>
        </div>
    </section>

    <!-- Loan Services Section -->
    <section class="section" id="services">
        <div class="container">
            <h2 class="section-title">Our Loan Services</h2>
            <div class="loan-services-grid">
                <a href="/small-trader-loans" class="loan-card" style="text-decoration: none; color: inherit; display: block;">
                    <div class="loan-card-content">
                        <div class="loan-icon">🏪</div>
                        <div class="loan-info">
                            <span class="checkmark">✔</span>
                            <h3 class="loan-name">Small Trader Loans</h3>
                        </div>
                    </div>
                </a>
                <a href="/daily-collection-loans" class="loan-card" style="text-decoration: none; color: inherit; display: block;">
                    <div class="loan-card-content">
                        <div class="loan-icon">💰</div>
                        <div class="loan-info">
                            <span class="checkmark">✔</span>
                            <h3 class="loan-name">Daily Collection Loans</h3>
                        </div>
                    </div>
                </a>
                <a href="/group-personal-loans" class="loan-card" style="text-decoration: none; color: inherit; display: block;">
                    <div class="loan-card-content">
                        <div class="loan-icon">👥</div>
                        <div class="loan-info">
                            <span class="checkmark">✔</span>
                            <h3 class="loan-name">Group Personal Loans</h3>
                        </div>
                    </div>
                </a>
                <a href="/consumer-durable-loans" class="loan-card" style="text-decoration: none; color: inherit; display: block;">
                    <div class="loan-card-content">
                        <div class="loan-icon">🛍️</div>
                        <div class="loan-info">
                            <span class="checkmark">✔</span>
                            <h3 class="loan-name">Consumer Durable Loans</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section why-choose-us" id="why-choose-us">
        <div class="container">
            <h2 class="section-title">Why Choose Us</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <span class="feature-checkmark">✔</span>
                    <span class="feature-text">Fast and simple loan approval</span>
                </div>
                <div class="feature-item">
                    <span class="feature-checkmark">✔</span>
                    <span class="feature-text">Minimal documentation</span>
                </div>
                <div class="feature-item">
                    <span class="feature-checkmark">✔</span>
                    <span class="feature-text">Flexible repayment options</span>
                </div>
                <div class="feature-item">
                    <span class="feature-checkmark">✔</span>
                    <span class="feature-text">Transparent lending policies</span>
                </div>
                <div class="feature-item">
                    <span class="feature-checkmark">✔</span>
                    <span class="feature-text">Member-focused financial services</span>
                </div>
                <div class="feature-item">
                    <span class="feature-checkmark">✔</span>
                    <span class="feature-text">Ethical microfinance practices</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section" id="faq">
        <div class="container">
            <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">Do you provide large business loans?</div>
                    <div class="faq-answer">No. We provide loans only for small traders, daily earners, group members, and consumer purchases.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Who can apply for daily collection loans?</div>
                    <div class="faq-answer">Daily income earners and small vendors are eligible.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What is group lending?</div>
                    <div class="faq-answer">A lending model where members support each other for loan repayment.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How long does loan approval take?</div>
                    <div class="faq-answer">Loan approval normally takes 24 to 72 working hours after verification.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="section-title">CUSTOMER TESTIMONIALS</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <p class="testimonial-text">"Our daily loan support helped maintain our shop cash flow."</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <p class="testimonial-text">"Group loan helped me manage family expenses easily."</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <p class="testimonial-text">"Consumer loan helped me purchase essential home appliances."</p>
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
                    <a href="#about">About Us</a>
                    <a href="#services">Services</a>
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
