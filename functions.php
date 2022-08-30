<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// CARBON FIELDS

function crb_load()
{
    require_once(__DIR__ . '/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

function crb_attach_theme_options()
{
    Container::make('theme_options', 'Theme Options')
        ->add_tab('Logos and Links', array(
            Field::make('image', 'logo_full', 'Your Full Size Logo')
                ->set_width('50'),
            Field::make('image', 'logo_small', 'Your Small Logo')
                ->set_width('50'),
            Field::make('text', 'booking_url', 'Booking Link'),
            Field::make('text', 'form_link', 'Contact Us Form Link')
        ))
        ->add_tab('Social and Contact Info', array(
            Field::make('text', 'facebook_url', 'Facebook URL'),
            Field::make('text', 'instagram_url', 'Instagram URL'),
            Field::make('text', 'tiktok_url', 'TikTok URL'),
            Field::make('text', 'phone_num', 'Phone Number'),
            Field::make('text', 'email_address', 'Email Address')
        ))
        ->add_tab('Meta Information', array(
            Field::make('text', 'meta_description', 'Business Short Description'),
            Field::make('text', 'meta_keywords', 'Business Keywords')
        ));
}

function crb_attach_post_options()
{
    Container::make('post_meta', 'Header')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '8')
        ->add_fields(array(
            Field::make('text', 'main_header', 'Main Header')
        ));

    Container::make('post_meta', 'Services')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '8')
        ->add_fields(array(
            Field::make('image', 'services_img', 'Services Image')
                ->set_width('10'),
            Field::make('text', 'services_header', 'Services Header')
                ->set_width('90'),
            Field::make('complex', 'services', 'Services')
                ->add_fields(array(
                    Field::make('text', 'service', 'Service')
                )),

        ));

    Container::make('post_meta', 'About Us')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '8')
        ->add_fields(array(
            Field::make('image', 'about_us_img', 'About Us Image')
                ->set_width('10'),
            Field::make('text', 'about_us_header', 'About Us Header')
                ->set_width('90'),
            Field::make('text', 'about_us_founded', 'Founder Statement'),
            Field::make('text', 'about_us_text', 'About Us Text')
        ));

    Container::make('post_meta', 'Service Area')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '8')
        ->add_fields(array(
            Field::make('image', 'service_area_img', 'Service Area Image')
                ->set_width('10'),
            Field::make('text', 'service_area_header', 'Service Area Header')
                ->set_width('90'),
            Field::make('textarea', 'service_area_text_1', 'Service Area Text'),
            Field::make('textarea', 'service_area_text_2', 'Service Area Text')
        ));


    Container::make('post_meta', 'Gallery')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '11')
        ->add_fields(array(
            Field::make('media_gallery', 'photo_gallery', __('Media Gallery'))
                ->set_type(array('image', 'video'))
                ->set_duplicates_allowed(false),
        ));

    Container::make('post_meta', 'Testimonials')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '13')
        ->add_fields(array(
            Field::make('complex', 'testimonials', 'Testimonial List')
                ->add_fields(array(
                    Field::make('text', 'testimonial_name', 'Person\'s Name')
                        ->set_width('20'),
                    Field::make('text', 'testimonial_quote', 'Quote')
                        ->set_width('80')
                )),
        ));

    Container::make('post_meta', 'Services')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '45')
        ->add_fields(array(
            Field::make('complex', 'services_list', 'Services Section')
                ->add_fields(array(
                    Field::make('text', 'services_type', 'Service Type'),
                    Field::make('complex', 'services_left', 'Services Left Column')
                        ->set_width('50')
                        ->add_fields(array(
                            Field::make('text', 'services_left_header', 'Services Left Header'),
                            Field::make('complex', 'services_left_list', 'Services Left List')
                                ->add_fields(array(
                                    Field::make('text', 'services_left_item', 'Service Item')
                                )),
                        )),
                    Field::make('complex', 'services_right', 'Services Right Column')
                        ->set_width('50')
                        ->add_fields(array(
                            Field::make('text', 'services_right_header', 'Services Right Header'),
                            Field::make('complex', 'services_right_list', 'Services Right List')
                                ->add_fields(array(
                                    Field::make('text', 'services_right_item', 'Service Item')
                                )),
                        )),
                )),
        ));

    Container::make('post_meta', 'Team')
        ->where('post_type', '=', 'page')
        ->where('post_id', '=', '47')
        ->add_fields(array(
            Field::make('complex', 'team', 'Our Team')
                ->add_fields(array(
                    Field::make('image', 'team_member_photo', 'Team Member Photo')
                        ->set_width('10'),
                    Field::make('text', 'team_member_name', 'Team Member Name')
                        ->set_width('20'),
                    Field::make('text', 'team_member_bio', 'Team Member Bio')
                        ->set_width('70'),
                )),
        ));
}

function the_field($field)
{
    echo carbon_get_the_post_meta($field);
}

function get_field($field)
{
    return carbon_get_the_post_meta($field);
}

// SCRIPTS AND STYLES

function global_scripts()
{
    wp_enqueue_style('site-styles', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/dd510d8712.js');
}

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

// ACTION!

add_action('wp_enqueue_scripts', 'global_scripts');

add_action('after_setup_theme', 'crb_load');

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

add_action('carbon_fields_register_fields', 'crb_attach_post_options');

add_action('get_header', 'remove_admin_login_header');
