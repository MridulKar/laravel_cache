1. storings item in cache

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


2. retrieving items from cache

Cache::get('key');
Cache::get('key', 'default_value');
Cache::get('key', 'callback');

3. Item exists in cache

if(Cache::has('key')){

}

4. Removing Items from cache

Cache::forget('key');
Cache::put('key', 'value', 0);

5. Removing Entire cache

Cache::flush();

6. Retrieving and store Item

Cache::remember('users', $seconds, function(){
 return ModelName::all();
});

Cache::rememberForever('users', $seconds, function(){
 return ModelName::all();
});

7. Retrieve and Delete Item

Cache::pull('key');
