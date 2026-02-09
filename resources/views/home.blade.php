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
            background: var(--bg-light);
        }
        
        /* Parallax background layer */
        .parallax-bg {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }
        
        .parallax-bg-pattern {
            position: absolute;
            inset: 0;
            background-attachment: fixed;
        }
        
        .parallax-bg-pattern::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg,
                rgba(255, 255, 255, 0.12) 0%,
                transparent 35%,
                transparent 65%,
                rgba(248, 250, 252, 0.18) 100%);
            background-attachment: fixed;
        }
        
        /* Prismatic triangles - stronger so parallax is clearly visible */
        .parallax-triangle {
            position: absolute;
            clip-path: polygon(50% 0%, 100% 100%, 0% 100%);
            opacity: 1;
            will-change: transform;
        }
        
        .parallax-triangle-1 {
            width: 420px;
            height: 360px;
            top: 10%;
            left: -8%;
            clip-path: polygon(0% 0%, 100% 50%, 0% 100%);
            background: linear-gradient(160deg, rgba(6, 182, 212, 0.32), rgba(30, 64, 175, 0.2), transparent);
        }
        
        .parallax-triangle-2 {
            width: 380px;
            height: 320px;
            top: 35%;
            right: -5%;
            clip-path: polygon(100% 0%, 0% 100%, 100% 100%);
            background: linear-gradient(300deg, rgba(59, 130, 246, 0.28), rgba(139, 92, 246, 0.2), rgba(244, 114, 182, 0.12));
        }
        
        .parallax-triangle-3 {
            width: 340px;
            height: 300px;
            bottom: 25%;
            left: 15%;
            clip-path: polygon(50% 100%, 0% 0%, 100% 0%);
            background: linear-gradient(20deg, rgba(20, 184, 166, 0.26), rgba(34, 211, 238, 0.2), rgba(99, 102, 241, 0.14));
        }
        
        .parallax-triangle-4 {
            width: 280px;
            height: 260px;
            top: 55%;
            right: 20%;
            clip-path: polygon(0% 0%, 100% 0%, 50% 100%);
            background: linear-gradient(200deg, rgba(167, 139, 250, 0.24), rgba(236, 72, 153, 0.14), transparent);
        }
        
        .parallax-triangle-5 {
            width: 320px;
            height: 280px;
            bottom: -5%;
            right: -3%;
            clip-path: polygon(100% 0%, 0% 50%, 100% 100%);
            background: linear-gradient(340deg, rgba(245, 158, 11, 0.2), rgba(14, 165, 233, 0.2), transparent);
        }
        
        .parallax-triangle-6 {
            width: 260px;
            height: 240px;
            top: 70%;
            left: -2%;
            clip-path: polygon(0% 0%, 100% 100%, 0% 100%);
            background: linear-gradient(45deg, rgba(34, 211, 238, 0.24), rgba(59, 130, 246, 0.18), rgba(251, 146, 60, 0.12));
        }
        
        .parallax-triangle-7 {
            width: 300px;
            height: 260px;
            top: 42%;
            left: 50%;
            margin-left: -150px;
            clip-path: polygon(50% 0%, 100% 100%, 0% 100%);
            background: linear-gradient(180deg, rgba(99, 102, 241, 0.26), rgba(14, 165, 233, 0.2), rgba(20, 184, 166, 0.16));
        }
        
        .parallax-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(50px);
            opacity: 0.55;
            will-change: transform;
        }
        
        .parallax-shape-1 {
            width: 480px;
            height: 480px;
            background: linear-gradient(135deg, rgba(13, 148, 136, 0.4) 0%, rgba(20, 184, 166, 0.28) 100%);
            top: -120px;
            right: -80px;
        }
        
        .parallax-shape-2 {
            width: 360px;
            height: 360px;
            background: linear-gradient(135deg, rgba(30, 64, 175, 0.35) 0%, rgba(59, 130, 246, 0.22) 100%);
            bottom: 20%;
            left: -100px;
        }
        
        .parallax-shape-3 {
            width: 320px;
            height: 320px;
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.28) 0%, rgba(217, 119, 6, 0.2) 100%);
            top: 55%;
            right: 5%;
        }
        
        .page-content {
            position: relative;
            z-index: 1;
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
        
        .hero-inner {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 3rem;
        }

        .hero-content {
            flex: 1;
            text-align: left;
            max-width: 600px;
        }

        .hero-image-wrap {
            flex-shrink: 0;
        }

        .hero-image-wrap img {
            max-width: 100%;
            height: auto;
            max-height: 380px;
            object-fit: contain;
            border-radius: 0.75rem;
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

        .hero-cta {
            position: relative;
            z-index: 1;
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
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
        
        /* Section Styles - same parallax-friendly bg for Loan Services, Why Choose Us, FAQ */
        .section {
            padding: 5rem 0;
        }
        
        /* About, Why Choose Us, Testimonials: solid background, no prism overlap */
        .about,
        .why-choose-us,
        .testimonials-section {
            background: var(--bg-light);
        }
        
        /* Only Loan Services & FAQ: transparent so prismatic parallax shows; rest stay clean */
        #services,
        .faq-section {
            background: rgba(248, 250, 252, 0.32);
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
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }
        
        .loan-card {
            display: block;
            background: white;
            border-radius: 1.25rem;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06), 0 1px 3px rgba(0, 0, 0, 0.04);
            transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
            overflow: hidden;
            cursor: pointer;
            position: relative;
            aspect-ratio: 3 / 4;
            min-height: 200px;
        }
        
        .loan-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px -12px rgba(30, 58, 138, 0.25), 0 0 0 1px rgba(0, 0, 0, 0.04);
        }
        
        .loan-card-content {
            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 200px;
        }
        
        .loan-card-top {
            flex: 0 0 48%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: filter 0.4s ease;
        }
        
        .loan-card:hover .loan-card-top {
            filter: brightness(1.05);
        }
        
        .loan-card:nth-child(1) .loan-card-top,
        .loan-card:nth-child(2) .loan-card-top,
        .loan-card:nth-child(3) .loan-card-top,
        .loan-card:nth-child(4) .loan-card-top {
            background: linear-gradient(145deg, #2A3691 0%, #232f7a 50%, #3542a8 100%);
        }
        
        .loan-card-top::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 24px;
            background: white;
            border-radius: 24px 24px 0 0;
        }
        
        .loan-icon {
            font-size: 2.5rem;
            width: 72px;
            height: 72px;
            min-width: 72px;
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(8px);
            border-radius: 50%;
            flex-shrink: 0;
            transition: transform 0.4s ease;
            position: relative;
            z-index: 1;
            border: 2px solid rgba(255, 255, 255, 0.4);
        }
        
        .loan-card:hover .loan-icon {
            transform: scale(1.1) rotate(-3deg);
        }
        
        .loan-card-bottom {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 1.25rem 1.25rem 1.5rem;
            text-align: center;
            background: white;
        }
        
        .loan-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }
        
        .loan-card .loan-name {
            font-size: 1.125rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin: 0;
            line-height: 1.3;
            letter-spacing: -0.02em;
        }
        
        .loan-card .loan-more {
            font-size: 0.8125rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            color: var(--accent-teal);
            opacity: 0.9;
            transition: gap 0.3s ease, opacity 0.3s ease, color 0.3s ease;
        }
        
        .loan-card:hover .loan-more {
            gap: 0.6rem;
            opacity: 1;
            color: var(--accent-teal-light);
        }
        
        .loan-card .loan-more::after {
            content: '→';
            font-weight: 700;
        }
        
        /* Why Choose Us Section - list box design (same as Core Values) */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.25rem;
            margin-top: 3rem;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            background: #e0f2fe;
            padding: 1.5rem 1.75rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #0d9488,
                -10px 0 0 0 #3b82f6,
                -15px 0 0 0 #dc2626;
            transition: all 0.3s ease;
            position: relative;
            text-align: left;
        }
        .feature-item:nth-child(1) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #0d9488,
                -10px 0 0 0 #3b82f6,
                -15px 0 0 0 #dc2626;
        }
        .feature-item:nth-child(2) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #f59e0b,
                -10px 0 0 0 #0d9488,
                -15px 0 0 0 #6366f1;
        }
        .feature-item:nth-child(3) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #8b5cf6,
                -10px 0 0 0 #06b6d4,
                -15px 0 0 0 #ec4899;
        }
        .feature-item:nth-child(4) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #10b981,
                -10px 0 0 0 #2563eb,
                -15px 0 0 0 #f97316;
        }
        .feature-item:nth-child(5) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #14b8a6,
                -10px 0 0 0 #a855f7,
                -15px 0 0 0 #eab308;
        }
        .feature-item:nth-child(6) {
            box-shadow: var(--shadow-md),
                -5px 0 0 0 #06b6d4,
                -10px 0 0 0 #ec4899,
                -15px 0 0 0 #0d9488;
        }
        .feature-item:hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #0d9488,
                -10px 0 0 0 #3b82f6,
                -15px 0 0 0 #dc2626;
        }
        .feature-item:nth-child(2):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #f59e0b,
                -10px 0 0 0 #0d9488,
                -15px 0 0 0 #6366f1;
        }
        .feature-item:nth-child(3):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #8b5cf6,
                -10px 0 0 0 #06b6d4,
                -15px 0 0 0 #ec4899;
        }
        .feature-item:nth-child(4):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #10b981,
                -10px 0 0 0 #2563eb,
                -15px 0 0 0 #f97316;
        }
        .feature-item:nth-child(5):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #14b8a6,
                -10px 0 0 0 #a855f7,
                -15px 0 0 0 #eab308;
        }
        .feature-item:nth-child(6):hover {
            box-shadow: var(--shadow-lg),
                -5px 0 0 0 #06b6d4,
                -10px 0 0 0 #ec4899,
                -15px 0 0 0 #0d9488;
        }
        
        .feature-icon {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(13, 148, 136, 0.12);
            border-radius: 0.5rem;
            flex-shrink: 0;
        }
        .feature-checkmark {
            color: var(--accent-teal);
            font-size: 1.5rem;
            font-weight: bold;
        }
        .feature-content {
            min-width: 0;
        }
        .feature-text {
            font-size: 1.125rem;
            font-weight: 500;
            color: var(--text-dark);
            line-height: 1.5;
        }
        
        /* FAQ Section */
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
            .hero-inner {
                flex-direction: column;
                gap: 2rem;
            }

            .hero-content {
                text-align: center;
            }

            .hero-cta {
                margin-top: 2rem;
                padding-top: 1.5rem;
            }

            .cta-buttons,
            .hero-cta {
                justify-content: center;
            }

            .hero-image-wrap {
                order: -1;
            }

            .hero-image-wrap img {
                max-height: 260px;
            }

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
            
            .cta-buttons,
            .hero-cta {
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
            
            .loan-card-top {
                flex: 0 0 44%;
            }
            
            .loan-icon {
                width: 60px;
                height: 60px;
                min-width: 60px;
                min-height: 60px;
                font-size: 2rem;
            }
            
            .loan-card-bottom {
                padding: 1rem 1rem 1.25rem;
            }
            
            .loan-card .loan-name {
                font-size: 1rem;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
                margin-top: 2rem;
            }
            
            .feature-item {
                padding: 1.25rem 1.5rem;
            }
            .feature-icon {
                width: 48px;
                height: 48px;
            }
            .feature-checkmark {
                font-size: 1.25rem;
            }
            .feature-text {
                font-size: 1rem;
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
    <!-- Parallax background -->
    <div class="parallax-bg">
        <div class="parallax-bg-pattern"></div>
        <div class="parallax-triangle parallax-triangle-1" data-speed="0.06"></div>
        <div class="parallax-triangle parallax-triangle-2" data-speed="0.05"></div>
        <div class="parallax-triangle parallax-triangle-3" data-speed="0.07"></div>
        <div class="parallax-triangle parallax-triangle-4" data-speed="0.04"></div>
        <div class="parallax-triangle parallax-triangle-5" data-speed="0.05"></div>
        <div class="parallax-triangle parallax-triangle-6" data-speed="0.06"></div>
        <div class="parallax-triangle parallax-triangle-7" data-speed="0.04"></div>
        <div class="parallax-shape parallax-shape-1" data-speed="0.12"></div>
        <div class="parallax-shape parallax-shape-2" data-speed="0.08"></div>
        <div class="parallax-shape parallax-shape-3" data-speed="0.05"></div>
    </div>

    <div class="page-content">
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
            <div class="hero-inner">
                <div class="hero-content">
                    <h1>Empowering Small Businesses & Communities Through Microfinance</h1>
                    <p class="hero-subtitle">
                        We provide responsible and affordable financial support to small traders, daily income earners,
                        and group members through structured microfinance lending programs.
                    </p>
                </div>
                <div class="hero-image-wrap">
                    <img src="{{ asset('images/microfinanceimg.png') }}" alt="People in Microfinance" />
                </div>
            </div>
            <div class="hero-cta">
                <a href="/become-a-member" class="btn btn-primary">Become a Member</a>
                <a href="/apply-for-loan" class="btn btn-secondary">Apply for Loan</a>
                <a href="/contact-us" class="btn btn-secondary">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container">
            <div class="about-content scroll-reveal">
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
            <h2 class="section-title scroll-reveal">Our Loan Services</h2>
            <div class="loan-services-grid scroll-reveal-grid">
                <a href="/small-trader-loans" class="loan-card" style="text-decoration: none; color: inherit;">
                    <div class="loan-card-content">
                        <div class="loan-card-top">
                            <div class="loan-icon">🏬</div>
                        </div>
                        <div class="loan-card-bottom">
                            <div class="loan-info">
                                <h3 class="loan-name">Small Trader Loans</h3>
                                <span class="loan-more">Learn more</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/daily-collection-loans" class="loan-card" style="text-decoration: none; color: inherit;">
                    <div class="loan-card-content">
                        <div class="loan-card-top">
                            <div class="loan-icon">💰</div>
                        </div>
                        <div class="loan-card-bottom">
                            <div class="loan-info">
                                <h3 class="loan-name">Daily Collection Loans</h3>
                                <span class="loan-more">Learn more</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/group-personal-loans" class="loan-card" style="text-decoration: none; color: inherit;">
                    <div class="loan-card-content">
                        <div class="loan-card-top">
                            <div class="loan-icon">👥</div>
                        </div>
                        <div class="loan-card-bottom">
                            <div class="loan-info">
                                <h3 class="loan-name">Group Personal Loans</h3>
                                <span class="loan-more">Learn more</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/consumer-durable-loans" class="loan-card" style="text-decoration: none; color: inherit;">
                    <div class="loan-card-content">
                        <div class="loan-card-top">
                            <div class="loan-icon">🛍️</div>
                        </div>
                        <div class="loan-card-bottom">
                            <div class="loan-info">
                                <h3 class="loan-name">Consumer Durable Loans</h3>
                                <span class="loan-more">Learn more</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section why-choose-us" id="why-choose-us">
        <div class="container">
            <h2 class="section-title scroll-reveal">Why Choose Us</h2>
            <div class="features-grid scroll-reveal-grid">
                <div class="feature-item">
                    <div class="feature-icon"><span class="feature-checkmark">✔</span></div>
                    <div class="feature-content"><span class="feature-text">Fast and simple loan approval</span></div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><span class="feature-checkmark">✔</span></div>
                    <div class="feature-content"><span class="feature-text">Minimal documentation</span></div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><span class="feature-checkmark">✔</span></div>
                    <div class="feature-content"><span class="feature-text">Flexible repayment options</span></div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><span class="feature-checkmark">✔</span></div>
                    <div class="feature-content"><span class="feature-text">Transparent lending policies</span></div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><span class="feature-checkmark">✔</span></div>
                    <div class="feature-content"><span class="feature-text">Member-focused financial services</span></div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><span class="feature-checkmark">✔</span></div>
                    <div class="feature-content"><span class="feature-text">Ethical microfinance practices</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section" id="faq">
        <div class="container">
            <h2 class="section-title scroll-reveal">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="faq-container scroll-reveal-grid">
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
            <h2 class="section-title scroll-reveal">CUSTOMER TESTIMONIALS</h2>
            <div class="testimonials-grid scroll-reveal-grid">
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
            <div class="footer-content scroll-reveal-scale">
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
    </div><!-- .page-content -->

    @include('partials.scroll-reveal')
    <script>
        (function () {
            var shapes = document.querySelectorAll('.parallax-shape, .parallax-triangle');
            if (!shapes.length) return;
            function updateParallax() {
                var y = window.pageYOffset || document.documentElement.scrollTop;
                shapes.forEach(function (el) {
                    var speed = parseFloat(el.getAttribute('data-speed')) || 0.1;
                    el.style.transform = 'translate3d(0, ' + (y * speed) + 'px, 0)';
                });
            }
            window.addEventListener('scroll', updateParallax, { passive: true });
            updateParallax();
        })();
    </script>
</body>
</html>
