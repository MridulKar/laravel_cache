<h3 style="color:red">1. storings item in cache</h3>

#Cache Facades...

Cache::put('key','value', $seconds=10);
Cache::put('key','value', now()->addMinutes(10));
Cache::add('key','value', $seconds=10);
Cache::forever('key','value');

#Global Cache Helper...

cache(['key'=>'value'], $seconds);
cache(['key'=>'value'], now()->addMinutes(10));
cache()->add('key','value', $seconds=10);

cache()->remember('users', $seconds, function(){
 return ModelName::all();
});


<h3 style="color:red">2. retrieving items from cache</h3>

Cache::get('key');
Cache::get('key', 'default_value');
Cache::get('key', 'callback');

<h3 style="color:red">3. Item exists in cache</h3>

if(Cache::has('key')){

}

<h3 style="color:red">4. Removing Items from cache</h3>

Cache::forget('key');
Cache::put('key', 'value', 0);

<h3 style="color:red">5. Removing Entire cache</h3>

Cache::flush();

<h3 style="color:red">6. Retrieving and store Item</h3>

Cache::remember('users', $seconds, function(){
 return ModelName::all();
});

Cache::rememberForever('users', $seconds, function(){
 return ModelName::all();
});

<h3 style="color:red">7. Retrieve and Delete Item</h3>

Cache::pull('key');
