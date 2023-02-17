{% extends 'default.php' %}


{% block blocks %}
{% include 'header/block.php' %}
{% set price_thanks = true %}
	{% include 'thanks/block.php' %}
	{% include 'price/block.php' %}
{% endblock %}