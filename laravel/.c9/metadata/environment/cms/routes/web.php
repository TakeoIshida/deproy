{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":25,"position":25,"stack":[[{"start":{"row":2,"column":37},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":41},"action":"insert","lines":["use App\\Http\\Controllers\\BookController; "],"id":3}],[{"start":{"row":16,"column":0},"end":{"row":18,"column":3},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});"],"id":4}],[{"start":{"row":16,"column":0},"end":{"row":29,"column":66},"action":"insert","lines":["// 本のダッシュボード表示","Route::get('/', [BookController::class, 'index']);","","// 新「本」を追加","Route::post('/books', [BookController::class, 'store']);","","//「本」の更新画面表示","Route::get('/booksedit/{book}',[BookController::class, 'edit']);","","//「本」の更新処理","Route::post('books/update',[BookController::class, 'update']);","","// 本を削除","Route::delete('/book/{book}', [BookController::class, 'destroy']);"],"id":5}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":52},"action":"insert","lines":["Route::group(['middleware' => 'auth'], function () {"],"id":6}],[{"start":{"row":29,"column":66},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":3},"action":"insert","lines":["});"],"id":8}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "],"id":9},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":54},"action":"remove","lines":["// 本のダッシュボード表示","    Route::get('/', [BookController::class, 'index']);"],"id":10}],[{"start":{"row":14,"column":2},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":54},"action":"insert","lines":["// 本のダッシュボード表示","    Route::get('/', [BookController::class, 'index']);"],"id":12}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "],"id":13}],[{"start":{"row":31,"column":70},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":4},"end":{"row":33,"column":0},"action":"insert","lines":["",""]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":33,"column":4},"end":{"row":35,"column":3},"action":"insert","lines":["// ログインユーザの本を取得","\tRoute::get('/home', [App\\Http\\Controllers\\HomeController::class, 'index']);","});"],"id":15}],[{"start":{"row":35,"column":2},"end":{"row":35,"column":3},"action":"remove","lines":[";"],"id":16},{"start":{"row":35,"column":1},"end":{"row":35,"column":2},"action":"remove","lines":[")"]},{"start":{"row":35,"column":0},"end":{"row":35,"column":1},"action":"remove","lines":["}"]}],[{"start":{"row":41,"column":0},"end":{"row":41,"column":89},"action":"remove","lines":["Route::get('/home', [App\\Http\\Controllers\\HomeController::class, 'index'])->name('home');"],"id":17}],[{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"remove","lines":["本"],"id":18}],[{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"insert","lines":["t"],"id":19},{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"insert","lines":["i"]}],[{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"remove","lines":["i"],"id":20},{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"remove","lines":["t"]}],[{"start":{"row":33,"column":15},"end":{"row":33,"column":19},"action":"insert","lines":["ツイート"],"id":21}],[{"start":{"row":34,"column":76},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":35,"column":0},"end":{"row":35,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":35,"column":1},"end":{"row":36,"column":0},"action":"insert","lines":["",""]},{"start":{"row":36,"column":0},"end":{"row":36,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":36,"column":1},"end":{"row":37,"column":74},"action":"insert","lines":["Route::post('book/{book}/like', [BookController::class, 'likeBook']);","\tRoute::post('book/{book}/unlike', [BookController::class, 'unlikeBook']);"],"id":23}],[{"start":{"row":35,"column":1},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":36,"column":0},"end":{"row":36,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":36,"column":1},"end":{"row":36,"column":11},"action":"insert","lines":["// お気に入り機能"],"id":25}],[{"start":{"row":38,"column":74},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":39,"column":0},"end":{"row":39,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":39,"column":1},"end":{"row":40,"column":0},"action":"insert","lines":["",""]},{"start":{"row":40,"column":0},"end":{"row":40,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":40,"column":1},"end":{"row":41,"column":61},"action":"insert","lines":["// 管理者ページ","\tRoute::get('/admin', [BookController::class, 'adminIndex']);"],"id":27}]]},"ace":{"folds":[],"scrolltop":432,"scrollleft":0,"selection":{"start":{"row":42,"column":0},"end":{"row":42,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1648394952673,"hash":"61d913733c224b225ca233ecea56a7d7d44e89c3"}