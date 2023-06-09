<?php

include("../script/produk.php");

?>

<!-- The Modal -->
<div class="modal fade" id="myModalPaket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Paket Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <form method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <input type="number" name="noHp" placeholder="No Hp" class="form-control" required>
          </div>
          <div class="mb-3">
            <select class="form-select" id="" name="Operator">
              <option>Telkomsel</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="metodePembayaran" name="payment">
              <option>BCA</option>
              <option>BNI</option>
              <option>BRI</option>
              <option>QRISS</option>
              <option>E-Wallet</option>
              <option>Bank Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="produkList" name="produk">
              <?php
              foreach (get_data_produk_by_kategori("Paket Data") as $data) {
              ?>
                <option value="<?= $data[0] ?>"><?= $data[1] ?></option>
              <?php } ?>
            </select>
          </div>

          <a href="konfirmasi_pembayaran.php" class="btn btn-primary btn-next-menu" name="addPenjualan">Next</a>
        </div>
      </form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<!-- The Modal -->
<div class="modal fade" id="myModalPulsa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Pulsa Isi Ulang</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <form method="POST" action="konfirmasi_pembayaran.php">
        <div class="modal-body">
          <div class="mb-3">
            <input type="number" name="noHp" placeholder="No Hp" class="form-control" required>
          </div>
          <div class="mb-3">
            <select class="form-select" id="" name="Operator">
              <option>Telkomsel</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="metodePembayaran" name="payment">
              <option>BCA</option>
              <option>BNI</option>
              <option>BRI</option>
              <option>QRISS</option>
              <option>E-Wallet</option>
              <option>Bank Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="produkList" name="produk">
              <?php
              foreach (get_data_produk_by_kategori("Pulsa Isi Ulang") as $data) {
              ?>
                <option value="<?= $data[0] ?>"><?= $data[1] ?></option>
              <?php } ?>

            </select>
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Next</button>
        </div>
      </form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModalToklis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Token Listrik</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <form method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <input type="number" name="noHp" placeholder="ID Pelanggan" class="form-control" required>
          </div>
          <div class="mb-3">
            <select class="form-select" id="" name="Operator">
              <option>Token Listrik</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="metodePembayaran" name="payment">
              <option>BCA</option>
              <option>BNI</option>
              <option>BRI</option>
              <option>QRISS</option>
              <option>E-Wallet</option>
              <option>Bank Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="produkList" name="produk">
              <?php
              foreach (get_data_produk_by_kategori("Token Listrik") as $data) {
              ?>
                <option value="<?= $data[0] ?>"><?= $data[1] ?></option>
              <?php } ?>

            </select>
          </div>

          <a href="konfirmasi_pembayaran.php" class="btn btn-primary btn-next-menu" name="addPenjualan">Next</a>
        </div>
      </form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- The Modal -->
<div class="modal fade" id="myModalVoucher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Voucher Game</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <form method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <input type="number" name="noHp" placeholder="ID+Server" class="form-control" required>
          </div>
          <div class="mb-3">
            <select class="form-select" id="" name="Jenis Game">
              <option>Mobile Legends</option>
              <option>Free Fire</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="metodePembayaran" name="payment">
              <option>BCA</option>
              <option>BNI</option>
              <option>BRI</option>
              <option>QRISS</option>
              <option>E-Wallet</option>
              <option>Bank Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="produkList" name="produk">
              <?php
              foreach (get_data_produk_by_kategori("Voucher Game") as $data) {
              ?>
                <option value="<?= $data[0] ?>"><?= $data[1] ?></option>
              <?php } ?>

            </select>
          </div>

          <a href="konfirmasi_pembayaran.php" class="btn btn-primary btn-next-menu" name="addPenjualan">Next</a>
        </div>
      </form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModalTelpon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Telpon Telkomsel</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <form method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <input type="number" name="noHp" placeholder="No Hp" class="form-control" required>
          </div>
          <div class="mb-3">
            <select class="form-select" id="" name="Operator">
              <option>Telkomsel SMS dan Telpon</option>

            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="metodePembayaran" name="payment">
              <option>BCA</option>
              <option>BNI</option>
              <option>BRI</option>
              <option>QRISS</option>
              <option>E-Wallet</option>
              <option>Bank Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="produkList" name="produk">
              <?php
              foreach (get_data_produk_by_kategori("Telpon Telkomsel") as $data) {
              ?>
                <option value="<?= $data[0] ?>"><?= $data[1] ?></option>
              <?php } ?>

            </select>
          </div>

          <a href="konfirmasi_pembayaran.php" class="btn btn-primary btn-next-menu" name="addPenjualan">Next</a>
        </div>
      </form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModalEtoll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">E-Toll</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal body -->
      <form method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <input type="number" name="noHp" placeholder="No Kartu" class="form-control" required>
          </div>
          <div class="mb-3">
            <select class="form-select" id="" name="Operator">
              <option selected hidden disable>Operator</option>
              <option>Brizzi</option>
              <option>Mandiri E-Toll</option>
              <option>TapCash BNI</option>

            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="metodePembayaran" name="payment">
              <option>BCA</option>
              <option>BNI</option>
              <option>BRI</option>
              <option>QRISS</option>
              <option>E-Wallet</option>
              <option>Bank Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="produkList" name="produk">
              <?php
              foreach (get_data_produk_by_kategori("E-Toll") as $data) {
              ?>
                <option value="<?= $data[0] ?>"><?= $data[1] ?></option>
              <?php } ?>

            </select>
          </div>

          <a href="konfirmasi_pembayaran.php" class="btn btn-primary btn-next-menu" name="addPenjualan">Next</a>
        </div>
      </form>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>