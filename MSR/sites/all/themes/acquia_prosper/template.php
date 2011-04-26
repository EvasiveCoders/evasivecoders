<?php
// $Id: template.php,v 1.1.2.3 2009/11/05 03:32:15 sociotech Exp $

/**
 * Changed breadcrumb separator
 */
function acquia_prosper_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode('_', $breadcrumb) .'</div>';
  } else {
    return '<div class="breadcrumb"><a href="' . check_url($front_page) . '">HOME</a></div>';
  }
}


function acquia_prosper_content_view_multiple_field($items, $field, $values) {
  if ($field['field_name'] != 'field_riding_gear_specs') {
    // If this is not my tuned field, then use original theme function directly.
    return acquia_prosper_content_view_multiple_field($items, $field, $values);
  }

  // Separate item values with my favorite separator.
  $separator = '</span></li><li><span>';
  $array = array();
  foreach ($items as $item) {
    if (!empty($item) || $item == '0') {
      $array[] = $item;
    }
  }
  return '<li><span>'. implode($separator, $array) .'</span></li>';
}


function phptemplate_preprocess_page(&$vars) {
  if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '-' . $path_part;
        $vars['template_files'][] = $template_filename;
      }
    }
  }
}

function acquia_prosper_views_mini_pager($tags = array(), $limit = 10, $element = 0, $parameters = array(), $quantity = 9) {
  global $pager_page_array, $pager_total;

  // Calculate various markers within this pager piece:
  // Middle is used to "center" pages around the current page.
  $pager_middle = ceil($quantity / 2);
  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.


  $li_previous = theme('pager_previous', (isset($tags[1]) ? $tags[1] : t('« NEWER')), $limit, $element, 1, $parameters);
  if (empty($li_previous)) {
    $li_previous = "&nbsp;";
  }

  $li_next = theme('pager_next', (isset($tags[3]) ? $tags[3] : t('OLDER »')), $limit, $element, 1, $parameters);
  if (empty($li_next)) {
    $li_next = "&nbsp;";
  }

  if ($pager_total[$element] > 1) {
    $items[] = array(
      'class' => 'pager-previous',
      'data' => $li_previous,
    );

    $items[] = array(
      'class' => 'pager-current',
      'data' => t('@current of @max', array('@current' => $pager_current, '@max' => $pager_max)),
    );

    $items[] = array(
      'class' => 'pager-next',
      'data' => $li_next,
    );
    return theme('item_list', $items, NULL, 'ul', array('class' => 'pager'));
  }
}
