function plataforma_elevatoria_shortcode($atts) {
    // Atributos do shortcode
    $atts = shortcode_atts(
        array(
            'nome' => 'Plataforma Elevatória',
            'descricao' => 'Descrição da plataforma elevatória.',
            'imagem' => '', // URL da imagem
            'altura' => '10m',
            'capacidade' => '500kg',
        ),
        $atts,
        'plataforma_elevatoria'
    );

    // HTML de saída do shortcode
    $output = '<div class="plataforma-elevatoria">';
    $output .= '<h3>' . esc_html($atts['nome']) . '</h3>';
    
    if (!empty($atts['imagem'])) {
        $output .= '<img src="' . esc_url($atts['imagem']) . '" alt="' . esc_html($atts['nome']) . '">';
    }
    
    $output .= '<p><strong>Altura máxima:</strong> ' . esc_html($atts['altura']) . '</p>';
    $output .= '<p><strong>Capacidade de carga:</strong> ' . esc_html($atts['capacidade']) . '</p>';
    $output .= '<p>' . esc_html($atts['descricao']) . '</p>';
    $output .= '</div>';

    return $output;
}
add_shortcode('plataforma_elevatoria', 'plataforma_elevatoria_shortcode');
