<?php

function u_register_plugins() {
  $plugins = [
    [
      'name' => 'Regenerate Thumbnails',
      'slug' => 'regenerate-thumbnails',
      'required' => false,
    ],
    [
      'name' => 'Udemy Plus',
      'slug' => 'udemy-plus',
      'source' => get_template_directory() . '/plugins/udemy-plus.zip',
      'required' => true,
    ]

  ];
  $config = [
    'id' => 'udemy',
    'menu' => 'tgmpa-install-plugins',
    'parent_slug' => 'themes.php',
    'capability' => 'edit_theme_options',
    'has_notice' => true,
    'dismissable' => true,
  ];

  tgmpa($plugins, $config);
}