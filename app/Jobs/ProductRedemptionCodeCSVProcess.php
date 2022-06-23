<?php

namespace App\Jobs;

use App\Models\ProductRedemptionCode;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\DeclareDeclare;

class ProductRedemptionCodeCSVProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $codes;
    public $product_id;

    /**
     * Create a new job instance.
     * @return void
     */
    public function __construct($code_chunk, $product_id)
    {
        $this->codes      = $code_chunk;
        $this->product_id = $product_id;
    }

    /**
     * Execute the job.
     * @return void
     */
    public function handle()
    {
        try {
            ProductRedemptionCode::where('product_id', $this->product_id)->delete();
            $count = 1;
            foreach ($this->codes as $code) {
                if ($count % 1000 == 0) {
                    sleep(20);
                }
                $product_redemption_code             = new ProductRedemptionCode();
                $product_redemption_code->product_id = $this->product_id;
                $product_redemption_code->code       = $code;
                $product_redemption_code->save();
                $count++;
            }

        } catch (\Exception $exception) {
            Log::error('RedemptionCodeCSVProcess: ' . $exception->getMessage());
            $this->fail();
        }

    }
}
