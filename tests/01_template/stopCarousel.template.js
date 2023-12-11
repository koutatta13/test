
test('rp_testCaserp_replaceUrl', async ({ page }) => {
  await page.goto('rp_hostrp_url');
  await page.evaluate(() => {
    var parent= document.querySelector(".carousel");
    const cloneParent=parent.cloneNode(true);
    parent.replaceWith(cloneParent);
  });
  await expect(page).toHaveScreenshot({
      fullPage: true,
      animations: 'disabled',
      timeout: 10000,
  });
});
