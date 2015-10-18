<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_483da1542754a9ba09a91ae6870f81ec4178b75ba8c704e3411539765ceb4cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7e29e620127b7d9885741a689dc022471386172e64374e7ffee083094d7fbbb = $this->env->getExtension("native_profiler");
        $__internal_c7e29e620127b7d9885741a689dc022471386172e64374e7ffee083094d7fbbb->enter($__internal_c7e29e620127b7d9885741a689dc022471386172e64374e7ffee083094d7fbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_label', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('choice_label', $context, $blocks);
        // line 151
        echo "
";
        // line 152
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('radio_label', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 178
        echo "
";
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('form_row', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('button_row', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('choice_row', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('date_row', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('time_row', $context, $blocks);
        // line 209
        echo "
";
        // line 210
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('radio_row', $context, $blocks);
        // line 228
        echo "
";
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_c7e29e620127b7d9885741a689dc022471386172e64374e7ffee083094d7fbbb->leave($__internal_c7e29e620127b7d9885741a689dc022471386172e64374e7ffee083094d7fbbb_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_dd4242ea44da3deb01cc1f0380e6928ff5297835d1d3cb46c66ba1ca577a45f5 = $this->env->getExtension("native_profiler");
        $__internal_dd4242ea44da3deb01cc1f0380e6928ff5297835d1d3cb46c66ba1ca577a45f5->enter($__internal_dd4242ea44da3deb01cc1f0380e6928ff5297835d1d3cb46c66ba1ca577a45f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dd4242ea44da3deb01cc1f0380e6928ff5297835d1d3cb46c66ba1ca577a45f5->leave($__internal_dd4242ea44da3deb01cc1f0380e6928ff5297835d1d3cb46c66ba1ca577a45f5_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cb11b56baf043bc9e566bdd5dc82cfce9f9c11535c12b12717759484672434ea = $this->env->getExtension("native_profiler");
        $__internal_cb11b56baf043bc9e566bdd5dc82cfce9f9c11535c12b12717759484672434ea->enter($__internal_cb11b56baf043bc9e566bdd5dc82cfce9f9c11535c12b12717759484672434ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_cb11b56baf043bc9e566bdd5dc82cfce9f9c11535c12b12717759484672434ea->leave($__internal_cb11b56baf043bc9e566bdd5dc82cfce9f9c11535c12b12717759484672434ea_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f5f740dce976f34160f845d95862b3e33e0484e2c75a82254788d4e870dd0cac = $this->env->getExtension("native_profiler");
        $__internal_f5f740dce976f34160f845d95862b3e33e0484e2c75a82254788d4e870dd0cac->enter($__internal_f5f740dce976f34160f845d95862b3e33e0484e2c75a82254788d4e870dd0cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f5f740dce976f34160f845d95862b3e33e0484e2c75a82254788d4e870dd0cac->leave($__internal_f5f740dce976f34160f845d95862b3e33e0484e2c75a82254788d4e870dd0cac_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d1391ae9b463653e170ffd3fed5a68bceed9ee750ed5ec2b6eac3b30a6a6fe1d = $this->env->getExtension("native_profiler");
        $__internal_d1391ae9b463653e170ffd3fed5a68bceed9ee750ed5ec2b6eac3b30a6a6fe1d->enter($__internal_d1391ae9b463653e170ffd3fed5a68bceed9ee750ed5ec2b6eac3b30a6a6fe1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 25
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_d1391ae9b463653e170ffd3fed5a68bceed9ee750ed5ec2b6eac3b30a6a6fe1d->leave($__internal_d1391ae9b463653e170ffd3fed5a68bceed9ee750ed5ec2b6eac3b30a6a6fe1d_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b123ce3563e906dab16efd72cc42e76f34009f1aeecbf61a8ffbbe1294998563 = $this->env->getExtension("native_profiler");
        $__internal_b123ce3563e906dab16efd72cc42e76f34009f1aeecbf61a8ffbbe1294998563->enter($__internal_b123ce3563e906dab16efd72cc42e76f34009f1aeecbf61a8ffbbe1294998563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b123ce3563e906dab16efd72cc42e76f34009f1aeecbf61a8ffbbe1294998563->leave($__internal_b123ce3563e906dab16efd72cc42e76f34009f1aeecbf61a8ffbbe1294998563_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_72dd166ed90e0b5c2b905509cb4cd51631174702b3173f0dc090760b878ee4aa = $this->env->getExtension("native_profiler");
        $__internal_72dd166ed90e0b5c2b905509cb4cd51631174702b3173f0dc090760b878ee4aa->enter($__internal_72dd166ed90e0b5c2b905509cb4cd51631174702b3173f0dc090760b878ee4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_72dd166ed90e0b5c2b905509cb4cd51631174702b3173f0dc090760b878ee4aa->leave($__internal_72dd166ed90e0b5c2b905509cb4cd51631174702b3173f0dc090760b878ee4aa_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9842aeac9d7a66792533a7d97f12a57c70d79b453319cdc0b21a0e0970a779a8 = $this->env->getExtension("native_profiler");
        $__internal_9842aeac9d7a66792533a7d97f12a57c70d79b453319cdc0b21a0e0970a779a8->enter($__internal_9842aeac9d7a66792533a7d97f12a57c70d79b453319cdc0b21a0e0970a779a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_9842aeac9d7a66792533a7d97f12a57c70d79b453319cdc0b21a0e0970a779a8->leave($__internal_9842aeac9d7a66792533a7d97f12a57c70d79b453319cdc0b21a0e0970a779a8_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_af2dde4c0ee7830152c05028200cbd70a1fc888c5d56ee1973ce1a96e5126551 = $this->env->getExtension("native_profiler");
        $__internal_af2dde4c0ee7830152c05028200cbd70a1fc888c5d56ee1973ce1a96e5126551->enter($__internal_af2dde4c0ee7830152c05028200cbd70a1fc888c5d56ee1973ce1a96e5126551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_af2dde4c0ee7830152c05028200cbd70a1fc888c5d56ee1973ce1a96e5126551->leave($__internal_af2dde4c0ee7830152c05028200cbd70a1fc888c5d56ee1973ce1a96e5126551_prof);

    }

    // line 90
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a107a39e618b324ef3ffd2497a5fdab5785bfbeb04f2f88d63db63b914ea8373 = $this->env->getExtension("native_profiler");
        $__internal_a107a39e618b324ef3ffd2497a5fdab5785bfbeb04f2f88d63db63b914ea8373->enter($__internal_a107a39e618b324ef3ffd2497a5fdab5785bfbeb04f2f88d63db63b914ea8373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 91
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 92
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_a107a39e618b324ef3ffd2497a5fdab5785bfbeb04f2f88d63db63b914ea8373->leave($__internal_a107a39e618b324ef3ffd2497a5fdab5785bfbeb04f2f88d63db63b914ea8373_prof);

    }

    // line 95
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_483f6ef75968ee5a65e79c2a3681633804f7bb8e149b71d34365b64773fe3bfd = $this->env->getExtension("native_profiler");
        $__internal_483f6ef75968ee5a65e79c2a3681633804f7bb8e149b71d34365b64773fe3bfd->enter($__internal_483f6ef75968ee5a65e79c2a3681633804f7bb8e149b71d34365b64773fe3bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 96
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 97
            echo "<div class=\"control-group\">";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "</div>";
        } else {
            // line 106
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 108
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 109
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 110
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "</div>";
        }
        
        $__internal_483f6ef75968ee5a65e79c2a3681633804f7bb8e149b71d34365b64773fe3bfd->leave($__internal_483f6ef75968ee5a65e79c2a3681633804f7bb8e149b71d34365b64773fe3bfd_prof);

    }

    // line 117
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9f067021a1d1d04dda88063cf1a53e883fbe3f51340141a02cddc000ad2d7260 = $this->env->getExtension("native_profiler");
        $__internal_9f067021a1d1d04dda88063cf1a53e883fbe3f51340141a02cddc000ad2d7260->enter($__internal_9f067021a1d1d04dda88063cf1a53e883fbe3f51340141a02cddc000ad2d7260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 118
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 119
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 122
            echo "<div class=\"checkbox\">";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 124
            echo "</div>";
        }
        
        $__internal_9f067021a1d1d04dda88063cf1a53e883fbe3f51340141a02cddc000ad2d7260->leave($__internal_9f067021a1d1d04dda88063cf1a53e883fbe3f51340141a02cddc000ad2d7260_prof);

    }

    // line 128
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_495d30161ff2b049d21ed5348dbe3891d2333aa3a8326f74716c3718f9f50dc3 = $this->env->getExtension("native_profiler");
        $__internal_495d30161ff2b049d21ed5348dbe3891d2333aa3a8326f74716c3718f9f50dc3->enter($__internal_495d30161ff2b049d21ed5348dbe3891d2333aa3a8326f74716c3718f9f50dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 129
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 130
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 133
            echo "<div class=\"radio\">";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 135
            echo "</div>";
        }
        
        $__internal_495d30161ff2b049d21ed5348dbe3891d2333aa3a8326f74716c3718f9f50dc3->leave($__internal_495d30161ff2b049d21ed5348dbe3891d2333aa3a8326f74716c3718f9f50dc3_prof);

    }

    // line 141
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2f01862d0ee076aed2e6b89cdfbe4a196909b05d05db464fcacbc5fd29a997dc = $this->env->getExtension("native_profiler");
        $__internal_2f01862d0ee076aed2e6b89cdfbe4a196909b05d05db464fcacbc5fd29a997dc->enter($__internal_2f01862d0ee076aed2e6b89cdfbe4a196909b05d05db464fcacbc5fd29a997dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 142
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 143
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2f01862d0ee076aed2e6b89cdfbe4a196909b05d05db464fcacbc5fd29a997dc->leave($__internal_2f01862d0ee076aed2e6b89cdfbe4a196909b05d05db464fcacbc5fd29a997dc_prof);

    }

    // line 146
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f6e8947b8e56e6d729b2490958a73aa0247ae4d25a897b2a46d4bc931927ab2a = $this->env->getExtension("native_profiler");
        $__internal_f6e8947b8e56e6d729b2490958a73aa0247ae4d25a897b2a46d4bc931927ab2a->enter($__internal_f6e8947b8e56e6d729b2490958a73aa0247ae4d25a897b2a46d4bc931927ab2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 148
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 149
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f6e8947b8e56e6d729b2490958a73aa0247ae4d25a897b2a46d4bc931927ab2a->leave($__internal_f6e8947b8e56e6d729b2490958a73aa0247ae4d25a897b2a46d4bc931927ab2a_prof);

    }

    // line 152
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_d6ea46d8661fdca21e253bb870bba4c2ed07b42f9c2a0c004270c70672011aa8 = $this->env->getExtension("native_profiler");
        $__internal_d6ea46d8661fdca21e253bb870bba4c2ed07b42f9c2a0c004270c70672011aa8->enter($__internal_d6ea46d8661fdca21e253bb870bba4c2ed07b42f9c2a0c004270c70672011aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 153
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d6ea46d8661fdca21e253bb870bba4c2ed07b42f9c2a0c004270c70672011aa8->leave($__internal_d6ea46d8661fdca21e253bb870bba4c2ed07b42f9c2a0c004270c70672011aa8_prof);

    }

    // line 156
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_55a4d781706d86814e2cdde1d127c555c2b2f2ee1f18d4e136f54ff1e1feb6c8 = $this->env->getExtension("native_profiler");
        $__internal_55a4d781706d86814e2cdde1d127c555c2b2f2ee1f18d4e136f54ff1e1feb6c8->enter($__internal_55a4d781706d86814e2cdde1d127c555c2b2f2ee1f18d4e136f54ff1e1feb6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_55a4d781706d86814e2cdde1d127c555c2b2f2ee1f18d4e136f54ff1e1feb6c8->leave($__internal_55a4d781706d86814e2cdde1d127c555c2b2f2ee1f18d4e136f54ff1e1feb6c8_prof);

    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d3a979d5635b7ddd3d4c8cc7c91670379a9a5b9267d4a15b3e4b4b3f3cdae326 = $this->env->getExtension("native_profiler");
        $__internal_d3a979d5635b7ddd3d4c8cc7c91670379a9a5b9267d4a15b3e4b4b3f3cdae326->enter($__internal_d3a979d5635b7ddd3d4c8cc7c91670379a9a5b9267d4a15b3e4b4b3f3cdae326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 161
        echo "    ";
        // line 162
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 163
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 167
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 170
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 171
                echo "        ";
            }
            // line 172
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 173
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 174
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 175
            echo "</label>
    ";
        }
        
        $__internal_d3a979d5635b7ddd3d4c8cc7c91670379a9a5b9267d4a15b3e4b4b3f3cdae326->leave($__internal_d3a979d5635b7ddd3d4c8cc7c91670379a9a5b9267d4a15b3e4b4b3f3cdae326_prof);

    }

    // line 181
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_339cce89f8f4e71d66ed1efde92b378543ea8486bcb1185bb0e6c66a82542e85 = $this->env->getExtension("native_profiler");
        $__internal_339cce89f8f4e71d66ed1efde92b378543ea8486bcb1185bb0e6c66a82542e85->enter($__internal_339cce89f8f4e71d66ed1efde92b378543ea8486bcb1185bb0e6c66a82542e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 182
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 186
        echo "</div>";
        
        $__internal_339cce89f8f4e71d66ed1efde92b378543ea8486bcb1185bb0e6c66a82542e85->leave($__internal_339cce89f8f4e71d66ed1efde92b378543ea8486bcb1185bb0e6c66a82542e85_prof);

    }

    // line 189
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b645a1cda94b8851174ffdb74149ab1366287761e5141bc9298bef589c442329 = $this->env->getExtension("native_profiler");
        $__internal_b645a1cda94b8851174ffdb74149ab1366287761e5141bc9298bef589c442329->enter($__internal_b645a1cda94b8851174ffdb74149ab1366287761e5141bc9298bef589c442329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 190
        echo "<div class=\"form-group\">";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 192
        echo "</div>";
        
        $__internal_b645a1cda94b8851174ffdb74149ab1366287761e5141bc9298bef589c442329->leave($__internal_b645a1cda94b8851174ffdb74149ab1366287761e5141bc9298bef589c442329_prof);

    }

    // line 195
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_f2a827df575fb281b9735670e3ea3c53444d71cdedb47cd0dcafa2f784f0472a = $this->env->getExtension("native_profiler");
        $__internal_f2a827df575fb281b9735670e3ea3c53444d71cdedb47cd0dcafa2f784f0472a->enter($__internal_f2a827df575fb281b9735670e3ea3c53444d71cdedb47cd0dcafa2f784f0472a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 196
        $context["force_error"] = true;
        // line 197
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f2a827df575fb281b9735670e3ea3c53444d71cdedb47cd0dcafa2f784f0472a->leave($__internal_f2a827df575fb281b9735670e3ea3c53444d71cdedb47cd0dcafa2f784f0472a_prof);

    }

    // line 200
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8aa5c3f7fd7586b69b566e12c2092b01ae8bb376ebad5f070dc999bbf30d1694 = $this->env->getExtension("native_profiler");
        $__internal_8aa5c3f7fd7586b69b566e12c2092b01ae8bb376ebad5f070dc999bbf30d1694->enter($__internal_8aa5c3f7fd7586b69b566e12c2092b01ae8bb376ebad5f070dc999bbf30d1694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 201
        $context["force_error"] = true;
        // line 202
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8aa5c3f7fd7586b69b566e12c2092b01ae8bb376ebad5f070dc999bbf30d1694->leave($__internal_8aa5c3f7fd7586b69b566e12c2092b01ae8bb376ebad5f070dc999bbf30d1694_prof);

    }

    // line 205
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ae4528df5a7e1da30c7a992189353809e308eb22f734a8f41df0f692e9d40e98 = $this->env->getExtension("native_profiler");
        $__internal_ae4528df5a7e1da30c7a992189353809e308eb22f734a8f41df0f692e9d40e98->enter($__internal_ae4528df5a7e1da30c7a992189353809e308eb22f734a8f41df0f692e9d40e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 206
        $context["force_error"] = true;
        // line 207
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae4528df5a7e1da30c7a992189353809e308eb22f734a8f41df0f692e9d40e98->leave($__internal_ae4528df5a7e1da30c7a992189353809e308eb22f734a8f41df0f692e9d40e98_prof);

    }

    // line 210
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_35725cfb6c0b9e1bf3026d1e233ff0d702d2fc1487a9da958169cc78a8d08f00 = $this->env->getExtension("native_profiler");
        $__internal_35725cfb6c0b9e1bf3026d1e233ff0d702d2fc1487a9da958169cc78a8d08f00->enter($__internal_35725cfb6c0b9e1bf3026d1e233ff0d702d2fc1487a9da958169cc78a8d08f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 211
        $context["force_error"] = true;
        // line 212
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_35725cfb6c0b9e1bf3026d1e233ff0d702d2fc1487a9da958169cc78a8d08f00->leave($__internal_35725cfb6c0b9e1bf3026d1e233ff0d702d2fc1487a9da958169cc78a8d08f00_prof);

    }

    // line 215
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_327f1f50b3a896e8dbd7cf4d3837e8aea4dc077dcac066123149c086d134fa8c = $this->env->getExtension("native_profiler");
        $__internal_327f1f50b3a896e8dbd7cf4d3837e8aea4dc077dcac066123149c086d134fa8c->enter($__internal_327f1f50b3a896e8dbd7cf4d3837e8aea4dc077dcac066123149c086d134fa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 216
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 219
        echo "</div>";
        
        $__internal_327f1f50b3a896e8dbd7cf4d3837e8aea4dc077dcac066123149c086d134fa8c->leave($__internal_327f1f50b3a896e8dbd7cf4d3837e8aea4dc077dcac066123149c086d134fa8c_prof);

    }

    // line 222
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_85875655a5d60daa5d5d723fd01eced9de02c7d0c991264b39222ac8ea9e0a8d = $this->env->getExtension("native_profiler");
        $__internal_85875655a5d60daa5d5d723fd01eced9de02c7d0c991264b39222ac8ea9e0a8d->enter($__internal_85875655a5d60daa5d5d723fd01eced9de02c7d0c991264b39222ac8ea9e0a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 223
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 226
        echo "</div>";
        
        $__internal_85875655a5d60daa5d5d723fd01eced9de02c7d0c991264b39222ac8ea9e0a8d->leave($__internal_85875655a5d60daa5d5d723fd01eced9de02c7d0c991264b39222ac8ea9e0a8d_prof);

    }

    // line 231
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2f333da25c35ce2f5d3b111da759a9a99f2d069836479b42647c19a60f197a9e = $this->env->getExtension("native_profiler");
        $__internal_2f333da25c35ce2f5d3b111da759a9a99f2d069836479b42647c19a60f197a9e->enter($__internal_2f333da25c35ce2f5d3b111da759a9a99f2d069836479b42647c19a60f197a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 232
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 233
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 234
            echo "    <ul class=\"list-unstyled\">";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 236
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "</ul>
    ";
            // line 239
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_2f333da25c35ce2f5d3b111da759a9a99f2d069836479b42647c19a60f197a9e->leave($__internal_2f333da25c35ce2f5d3b111da759a9a99f2d069836479b42647c19a60f197a9e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  834 => 239,  831 => 238,  823 => 236,  819 => 235,  817 => 234,  811 => 233,  809 => 232,  803 => 231,  796 => 226,  794 => 225,  792 => 224,  786 => 223,  780 => 222,  773 => 219,  771 => 218,  769 => 217,  763 => 216,  757 => 215,  750 => 212,  748 => 211,  742 => 210,  735 => 207,  733 => 206,  727 => 205,  720 => 202,  718 => 201,  712 => 200,  705 => 197,  703 => 196,  697 => 195,  690 => 192,  688 => 191,  686 => 190,  680 => 189,  673 => 186,  671 => 185,  669 => 184,  667 => 183,  661 => 182,  655 => 181,  646 => 175,  644 => 174,  642 => 173,  627 => 172,  624 => 171,  621 => 170,  618 => 169,  615 => 168,  612 => 167,  609 => 166,  606 => 165,  603 => 164,  600 => 163,  597 => 162,  595 => 161,  589 => 160,  582 => 157,  576 => 156,  569 => 153,  563 => 152,  556 => 149,  554 => 148,  548 => 146,  541 => 143,  539 => 142,  533 => 141,  525 => 135,  523 => 134,  521 => 133,  518 => 131,  516 => 130,  514 => 129,  508 => 128,  500 => 124,  498 => 123,  496 => 122,  493 => 120,  491 => 119,  489 => 118,  483 => 117,  475 => 113,  469 => 110,  468 => 109,  467 => 108,  463 => 107,  459 => 106,  456 => 104,  450 => 101,  449 => 100,  448 => 99,  444 => 98,  442 => 97,  440 => 96,  434 => 95,  427 => 92,  425 => 91,  419 => 90,  410 => 85,  407 => 84,  399 => 83,  394 => 81,  392 => 80,  390 => 79,  387 => 77,  385 => 76,  379 => 75,  370 => 70,  368 => 69,  366 => 67,  365 => 66,  364 => 65,  363 => 64,  358 => 62,  356 => 61,  354 => 60,  351 => 58,  349 => 57,  343 => 56,  335 => 52,  333 => 51,  331 => 50,  329 => 49,  327 => 48,  323 => 47,  321 => 46,  318 => 44,  316 => 43,  310 => 42,  302 => 38,  300 => 37,  298 => 36,  292 => 35,  285 => 32,  279 => 30,  277 => 29,  275 => 28,  269 => 26,  266 => 25,  264 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 231,  197 => 230,  194 => 228,  192 => 222,  189 => 221,  187 => 215,  184 => 214,  182 => 210,  179 => 209,  177 => 205,  174 => 204,  172 => 200,  169 => 199,  167 => 195,  164 => 194,  162 => 189,  159 => 188,  157 => 181,  154 => 180,  151 => 178,  149 => 160,  146 => 159,  144 => 156,  141 => 155,  139 => 152,  136 => 151,  134 => 146,  131 => 145,  129 => 141,  126 => 140,  123 => 138,  121 => 128,  118 => 127,  116 => 117,  113 => 116,  111 => 95,  108 => 94,  106 => 90,  103 => 89,  101 => 75,  98 => 74,  96 => 56,  93 => 55,  91 => 42,  88 => 41,  86 => 35,  83 => 34,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }
}
/* {% use "form_div_layout.html.twig" %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or 'file' != type %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                     translation_domain: choice_translation_domain,*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {% set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do not display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {{- label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* */
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 -%}*/
/*     {% if form.parent %}<span class="help-block">{% else %}<div class="alert alert-danger">{% endif %}*/
/*     <ul class="list-unstyled">*/
/*         {%- for error in errors -%}*/
/*             <li><span class="glyphicon glyphicon-exclamation-sign"></span> {{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {% if form.parent %}</span>{% else %}</div>{% endif %}*/
/*     {%- endif %}*/
/* {%- endblock form_errors %}*/
/* */
