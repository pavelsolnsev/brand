{% extends 'default.php' %}


{% block blocks %}
{% include 'header/block.php' %}
	{% set thanks_da = true %}
	{% include 'thanks/block.php' %}
{% endblock %}