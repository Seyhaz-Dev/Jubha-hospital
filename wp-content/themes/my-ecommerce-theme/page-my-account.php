  
  <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
 <?php get_header(); ?>  <br><br><br><br><br><br>
 <section class="patient-portal">
    <div class="portal-container">
        <div class="portal-info">
            <p class="subtitle">BOOK AN APPOINTMENT</p>
            <h1>Patient Online<br>Services</h1>
        </div>

        <div class="login-card">
            <div class="back-nav">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <i class="fas fa-chevron-left"></i> Back to Website
                </a>
            </div>

            <div class="login-header">
                <h3>LOGIN TO ALMANA HOSPITALS</h3>
                <i class="fas fa-hand-holding-medical"></i>
            </div>
            
            <div class="login-body">
                <p>Please login with your registered Email ID and Password to book an appointment with your doctor</p>
                
                <form action="<?php echo esc_url( wp_login_url() ); ?>" method="post">
                    <div class="input-group">
                        <input type="email" name="log" placeholder="Email *" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="pwd" placeholder="Password *" required>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn-signin">
                            SIGN IN <i class="fas fa-long-arrow-alt-right"></i>
                        </button>
                        <a href="<?php echo wp_lostpassword_url(); ?>" class="reset-link">Reset Password</a>
                    </div>
                </form>
            </div>
            
            <div class="login-footer">
                <p>Don't have an account? <a href="<?php echo wp_registration_url(); ?>">Create an account</a></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>