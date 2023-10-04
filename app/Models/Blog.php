<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $image, $imageNewName, $imgUrl, $dir;

    public static function saveInfo($request, $id = null)
    {
        if ($id != null) {
            self::$blog = Blog::find($id);
        } else {
            self::$blog = new Blog();
        }
        self::$blog->title = $request->title;
        self::$blog->category_id = $request->category_id;
        self::$blog->author_name = $request->author_name;
        self::$blog->description = $request->description;
        self::$blog->date = $request->date;

        if ($request->file('image')) {
            if (self::$blog->image) {
                if (file_exists(self::$blog->image)) {
                    unlink(self::$blog->image);
                }
            }
            self::$blog->image = self::saveImage($request);
        }
        self::$blog->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = $request->title . '_' . rand() . self::$image->extension();
        self::$dir = 'admin-assets/blog-image/';
        self::$imgUrl = self::$dir . self::$imageNewName;
        self::$image->move(self::$dir, self::$imageNewName);
        return self::$imgUrl;
    }

    public static function statusCheck($id)
    {
        self::$blog = Blog::find($id);
        if (self::$blog->status == 1) {
            self::$blog->status = 0;
        } else {
            self::$blog->status = 1;
        }
        self::$blog->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
