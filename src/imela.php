<?php

function instantiateAuthClass($guard=null)
{
	try
	{
		$class_name = get_class(request()->user($guard));
	}
	catch(\InvalidArgumentException $e)
	{
		return response("Please try again.", 422);
	}
    $namespace = '\\';
    $fully_qualified_class_name = $namespace.$class_name;
    return new $fully_qualified_class_name;
}

?>